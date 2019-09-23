@extends('layouts.app')

@section('content')
<form action="{{ route('layouts.update', $layout->id) }}" method="POST" id="layout-form">
    @csrf
    @method('PATCH')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Layout</div>
    
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="name">Layout Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Layout Name" value="{{ $layout->name }}">
                            </div>
                        </div>
                        <hr>
                        <div class="form-row" id="fields_checkboxes">
                            <div class="form-group col">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5>Select Fields</h5>
                                    <div>
                                        <a href="#" id="check_all">Check All</a> |
                                        <a href="#" id="check_none">Check None</a>
                                    </div>
                                </div>
                                <div class="form-row">
                                    @include('layouts._selectbox', ['id' => 'ofc', 'field_name' => 'OFC #', 'value' => 0, 'disabled' => 'disabled', 'checked' => 'checked'])
                                    @include('layouts._selectbox', ['id' => 'company_name', 'field_name' => 'Company Name', 'value' => 1, 'disabled' => 'disabled', 'checked' => 'checked'])
                                    @include('layouts._selectbox', ['id' => 'rap_division', 'field_name' => 'RAP Division', 'value' => 2])
                                    @include('layouts._selectbox', ['id' => 'contact_person', 'field_name' => 'Contact Person', 'value' => 3 ])
                                </div>
                                <div class="form-row mt-2">
                                    @include('layouts._selectbox', ['id' => 'job_title', 'field_name' => 'Job Title', 'value' => 4])
                                    @include('layouts._selectbox', ['id' => 'company_size', 'field_name' => 'Company Size', 'value' => 5])
                                    @include('layouts._selectbox', ['id' => 'country', 'field_name' => 'Country', 'value' => 6])
                                    @include('layouts._selectbox', ['id' => 'website', 'field_name' => 'Website', 'value' => 7])
                                </div>
                                <div class="form-row mt-2">
                                    @include('layouts._selectbox', ['id' => 'sight', 'field_name' => 'Sight', 'value' => 8])
                                    @include('layouts._selectbox', ['id' => 'rough', 'field_name' => 'Roughs', 'value' => 9])
                                    @include('layouts._selectbox', ['id' => 'shape', 'field_name' => 'Shapes', 'value' => 10])
                                    @include('layouts._selectbox', ['id' => 'size', 'field_name' => 'Size', 'value' => 11])
                                </div>
                                <div class="form-row mt-2">
                                    @include('layouts._selectbox', ['id' => 'color', 'field_name' => 'Color', 'value' => 12])
                                    @include('layouts._selectbox', ['id' => 'clarity', 'field_name' => 'Clarity', 'value' => 13])
                                    @include('layouts._selectbox', ['id' => 'make', 'field_name' => 'Make', 'value' => 14])
                                    @include('layouts._selectbox', ['id' => 'manufacturing_unit', 'field_name' => 'Manufacturing Units', 'value' => 15])
                                </div>
                                <div class="form-row mt-2">
                                    @include('layouts._selectbox', ['id' => 'branches', 'field_name' => 'Branches', 'value' => 16])
                                    @include('layouts._selectbox', ['id' => 'certs', 'field_name' => 'Certs', 'value' => 17])
                                    @include('layouts._selectbox', ['id' => 'comments', 'field_name' => 'Comments', 'value' => 18])
                                    @include('layouts._selectbox', ['id' => 'website_comments', 'field_name' => 'Website Comments', 'value' => 19])
                                </div>
                                <div class="form-row mt-2">
                                    @include('layouts._selectbox', ['id' => 'exhibiting', 'field_name' => 'Exhibiting / Markets', 'value' => 20])
                                    @include('layouts._selectbox', ['id' => 'jewelry_manufacturing', 'field_name' => 'Jewlery Manufacturing', 'value' => 21])
                                    @include('layouts._selectbox', ['id' => 'jewelry_trading', 'field_name' => 'Jewlery Trading', 'value' => 22])
                                    @include('layouts._selectbox', ['id' => 'address', 'field_name' => 'Address', 'value' => 23])
                                </div>
                                <div class="form-row mt-2">
                                    @include('layouts._selectbox', ['id' => 'city', 'field_name' => 'City', 'value' => 24])
                                    @include('layouts._selectbox', ['id' => 'state', 'field_name' => 'State', 'value' => 25])
                                    @include('layouts._selectbox', ['id' => 'zipcode', 'field_name' => 'ZIP', 'value' => 26])
                                    @include('layouts._selectbox', ['id' => 'cell_number', 'field_name' => 'Cell', 'value' => 27])
                                </div>
                                <div class="form-row mt-2">
                                    @include('layouts._selectbox', ['id' => 'email_address', 'field_name' => 'Email', 'value' => 28])
                                    @include('layouts._selectbox', ['id' => 'office_locations', 'field_name' => 'Office', 'value' => 29])
                                    @include('layouts._selectbox', ['id' => 'phone_numbers', 'field_name' => 'Phone', 'value' => 30])
                                    @include('layouts._selectbox', ['id' => 'fax_number', 'field_name' => 'Fax', 'value' => 31])
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col">
                                <h5>Change Order</h5>
                                <ul id="simpleList" class="list-group mt-4" style="display: grid; grid-template-columns: 1fr 1fr 1fr;"></ul>
                            </div>
                        </div>
                        <input type="hidden" name="visible_columns" id="visible_columns">
                        <input type="hidden" name="hidden_columns" id="hidden_columns">
                        <input type="hidden" name="layout_order" id="layout_order">
                        <div class="form-group d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit" id="order">Save Layout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
    <script>
        let selectedFields = [{{ $layout->visible_columns }}];
        $(selectedFields).each(function(i, val) {
            if (i > 1) {
                let $elem = $('#fields_checkboxes input[type="checkbox"]:eq('+val+')');
                $elem.prop('checked', true);
                $('#simpleList').append('<li class="list-group-item" data-id="' + $elem.val() + '">' + $elem.next('label').text() + '</li>');
            }
        });
        $('#check_all').on('click', function(e) {
            e.preventDefault();
            $('#fields_checkboxes input[type="checkbox"]').not(":disabled").not(":checked").prop('checked', true).each(function() {
                $(this).trigger('change');
            });
        });
        $('#check_none').on('click', function(e) {
            e.preventDefault();
            $('#fields_checkboxes input[type="checkbox"]').not(":disabled").prop('checked', false).each(function() {
                $(this).trigger('change');
            });
        });

        $('#fields_checkboxes input[type="checkbox"]').on('change', function(e) {
            if ($(this).prop('checked') == true) {
                $('#simpleList').append('<li class="list-group-item" data-id="' + $(this).val() + '">' + $(this).next('label').text() + '</li>')
            } else {
                $('#simpleList [data-id="' + $(this).val() + '"]').remove();
            }
        });

        let sortable = $('#simpleList').sortable({
            animation: 150,
            multiDrag: true, // Enable multi-drag
            selectedClass: 'list-group-item-primary',
            ghostClass: 'list-group-item-danger',
            filter: '.list-group-item-dark'
        });
        $('#order').on('click', function(e) {
            e.preventDefault();
            let arr1 = $('#simpleList').sortable('toArray');
            arr1.unshift("0", "1");
            $('#visible_columns').val(arr1);
            console.log(arr1);
            let arr2 = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"];
            let difference = arr2.filter(x => !arr1.includes(x));
            console.log(difference);
            $('#hidden_columns').val(difference);
            $('#layout_order').val(arr1.concat(difference));
            console.log((arr1.concat(difference)));
            $('#layout-form').submit();
        });
    </script>
@endpush
