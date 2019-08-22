@extends('layouts.app')

@push('styles')
<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-html5-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/r-2.2.2/sc-2.0.0/datatables.min.css"/>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Companies List</div>

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
                extend: 'collection',
                text: 'Table Control',
                buttons: [
                    {
                        extend: 'colvisGroup',
                        text: 'Color info',
                        show: [ 12, 18, 19 ],
                        hide: [ 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13, 14, 15, 16, 17, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32 ]
                    },
                    {
                        extend: 'colvisGroup',
                        text: 'Contact info',
                        show: [ 3, 4, 6, 7, 24, 25, 26, 27, 28, 29, 30, 31, 32 ],
                        hide: [ 2, 5, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23 ]
                    },
                    {
                        extend: 'colvisGroup',
                        text: 'Rough info',
                        show: [ 2, 5, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23 ],
                        hide: [ 3, 4, 6, 7, 24, 25, 26, 27, 28, 29, 30, 31, 32 ]
                    }
                ]
            },
            {
                extend: 'colvisGroup',
                text: 'Show all',
                show: ':hidden'
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible'
                }
            }, {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            }, {
                extend: 'colvis',
                text: 'Select Columns',
                collectionLayout: 'fixed four-column'
            }
        ],
        order: [[ 1, "asc" ]],
        scrollY:        "80vh",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        colReorder: true,
        fixedColumns:   {
            leftColumns: 2
        },
        /*columnDefs: [{
            targets: [0],
            visible: false
        }]*/
    });
</script>
@endpush
