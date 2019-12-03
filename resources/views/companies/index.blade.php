@extends('layouts.app')

@push('styles')
<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-html5-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/r-2.2.2/sc-2.0.0/datatables.min.css"/>
<style>
    table { white-space: nowrap; }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Companies List: <strong>{{ $companies->count() }}</strong></span>
                        <div class="w-25 d-flex justify-content-around">
                            @isset($favoritelist)
                                <span>List: <strong>{{ $favoritelist->name }}</strong></span>
                            @endisset
                            @isset($search)
                                <span>Search: <strong>{{ $search->name }}</strong></span>
                            @endisset
                            @isset($layout)
                                <span>Layout: <strong>{{ $layout->name }}</strong></span>
                            @endisset
                        </div>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Choose Layout
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['layout' => 0]) }}">Default Layout</a>
                                @foreach ($layouts as $single)
                                    <a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['layout' => $single->id]) }}">{{ $single->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('companies.partials._table')
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose Favorite List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        @forelse ($favoritelists as $key=>$list)
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="listItem{{ $key }}" name="favoritelist" value="{{ $list->id }}" class="custom-control-input">
                                <label class="custom-control-label" for="listItem{{ $key }}">{{ $list->name }}</label>
                            </div>
                        @empty
                            Please make a list first.
                        @endforelse
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveList">Add To List</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-html5-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/r-2.2.2/sc-2.0.0/datatables.min.js"></script>
<script>
    var table = $('table').DataTable({
        dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4 text-center'B><'col-sm-12 col-md-4'f>>" +
"<'row'<'col-sm-12'tr>>" +
"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        buttons: [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    {
                        extend: 'excel',
                        text: 'Export Selected To Excel',
                        exportOptions: {
                            columns: ':visible',
                            rows: '.table-active',
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'Export All To Excel',
                        exportOptions: {
                            columns: ':visible',
                        }
                    },
                ]
            },
            {
                text: 'Add To Favorites',
                action: function ( e, dt, node, config ) {
                    let ids = $.map(table.rows('.table-active').nodes(), function (item) {
                        return $(item).data("company-id");
                    });
                    showModal(ids);
                }
            },
            {
                text: 'Remove From Favorites',
                action: function ( e, dt, node, config ) {
                    let ids = $.map(table.rows('.table-active').nodes(), function (item) {
                        return $(item).data("company-id");
                    });
                    let selctedList = "{{ isset($favoritelist) ? true : false }}";
                    if (selctedList) {
                        if (ids) {
                            $.ajax({
                                method: "POST",
                                url: "{{ route('remove.multiple.favorites') }}",
                                data: {
                                    "company_ids": ids,
                                    "favoritelist_id": "{{ isset($favoritelist) ? $favoritelist->id : '' }}",
                                    "_token": "{{ csrf_token() }}",
                                }
                            })
                            .done(function() {
                                alert('Companies removed from favorite list.');
                                table.rows('.table-active').remove().draw();
                                // table.rows('.table-active').nodes().to$().removeClass('table-active');
                            })
                            .fail(function(data) {
                                alert('Please try again later.');
                            });
                        } else {
                            alert('select atleast one company');
                        }
                    } else {
                        alert('Please go to favorite lists');
                    }
                }
            },
            {
                text: 'Deselect',
                action: function(e, dt, node, config) {
                    table.rows().nodes().to$().removeClass('table-active');
                }
            }
        ],
        order: [[ 1, "asc" ]],
        scrollY:        "60vh",
        scrollX:        true,
        scrollCollapse: true,
        lengthMenu: [
            [ 25, 50, 100, -1 ],
            [ '25', '50', '100', 'All' ]
        ],
        columnDefs: [{
            targets: [ {{ $layout->hidden_columns ?? '' }} ],
            visible: false
        }],
        colReorder: {
            order: [ {{ $layout->layout_order ?? '' }} ]
        },
        fixedColumns:   {
            leftColumns: 2
        },
    });

    $('table tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('table-active');
    });

    // $('body').delegate('.trimmed', 'click', function(e) {
    //     let $elem = $(this);
    //     $elem.text($elem.data('full'));
    //     $elem.addClass('table-active untrimmed').removeClass('trimmed');
    // });

    // $('body').delegate('.untrimmed', 'click', function(e) {
    //     let $elem = $(this);
    //     $elem.text($elem.data('short'));
    //     $elem.addClass('trimmed').removeClass('table-active untrimmed');
    // });

    let companyIds;

    function showModal(ids) {
        if (ids.length) {
            $('#exampleModal').modal();
            companyIds = ids;
        } else {
            alert('select atleast one company');
        }
    }

    $('#saveList').on('click', function(e) {
        e.preventDefault();
        // console.log($('input[name="favoritelist"]:checked').val());
        if ($('input[name="favoritelist"]:checked').val()) {
            $.ajax({
                method: "POST",
                url: "{{ route('add.multiple.favorites') }}",
                data: {
                    "company_ids": companyIds,
                    "favoritelist_id": $('input[name="favoritelist"]:checked').val(),
                    "_token": "{{ csrf_token() }}",
                }
            })
            .done(function() {
                $('#exampleModal').modal('hide');
                alert('Companies added to favorite list');
                table.rows('.table-active').nodes().to$().removeClass('table-active');
            })
            .fail(function(data) {
                alert('Please try again later');
            });
        } else {
            alert('Please select at least one list');
        }
    });
</script>
@endpush
