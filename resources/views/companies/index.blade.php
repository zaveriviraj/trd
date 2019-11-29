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
                extend: 'csv',
                text: 'Export To Excel',
                exportOptions: {
                    columns: ':visible'
                }
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

                    console.log(ids);

                    $.ajax({
                        method: "POST",
                        url: "{{ route('remove.multiple.favorites') }}",
                        data: {
                            "company_ids": ids,
                            "_token": "{{ csrf_token() }}",
                        }
                    })
                    .done(function() {
                        alert('Companies removed from favorite list.');
                        table.rows('.table-active').nodes().to$().removeClass('table-active');
                    })
                    .fail(function(data) {
                        alert('Please try again later.');
                    });
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

    $('body').delegate('.trimmed', 'click', function(e) {
        let $elem = $(this);
        $elem.text($elem.data('full'));
        $elem.addClass('table-active untrimmed').removeClass('trimmed');
    });

    $('body').delegate('.untrimmed', 'click', function(e) {
        let $elem = $(this);
        $elem.text($elem.data('short'));
        $elem.addClass('trimmed').removeClass('table-active untrimmed');
    });

    function showModal(ids) {
        $.ajax({
            method: "POST",
            url: "{{ route('add.multiple.favorites') }}",
            data: {
                "company_ids": ids,
                "_token": "{{ csrf_token() }}",
            }
        })
        .done(function() {
            alert('Companies added to favorite list');
            table.rows('.table-active').nodes().to$().removeClass('table-active');
        })
        .fail(function(data) {
            alert('Please try again later');
        });
    }
</script>
@endpush
