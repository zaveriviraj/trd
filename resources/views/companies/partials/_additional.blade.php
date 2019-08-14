<div class="tab-pane fade" id="list-additional" role="tabpanel" aria-labelledby="list-additional-list">
    <div class="card">
        <div class="card-header">Additional Details</div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col">
                    @include('comps.input', ['name' => 'cell_numbers', 'label' => 'Cell Number', 'placeholder' => 'Enter Cell Number'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'emails', 'label' => 'Email Address', 'placeholder' => 'Enter Email Address'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'phones', 'label' => 'Phone Number', 'placeholder' => 'Enter Phone Number'])
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    @include('comps.input', ['name' => 'website', 'label' => 'Company Website', 'placeholder' => 'Enter Company Website'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'fax', 'label' => 'Fax Number', 'placeholder' => 'Enter Fax Number'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'office', 'label' => 'Offices', 'placeholder' => 'Enter Offices'])
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    @include('comps.input', ['name' => 'branches', 'label' => 'Branches', 'placeholder' => 'Enter Branches'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'manufacturing_units', 'label' => 'Manufacturing Units', 'placeholder' => 'Enter Manufacturing Units'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'other_names', 'label' => 'Other Names', 'placeholder' => 'Enter Comma Separated Names'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'other_job_titles', 'label' => 'Other Job Titles', 'placeholder' => 'Enter Comma Separated Job Titles'])
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    @include('comps.input', ['name' => 'other_landlines', 'label' => 'Other Landline Numbers', 'placeholder' => 'Enter Company Landline Numbers'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'other_mobiles', 'label' => 'Other Mobile Numbers', 'placeholder' => 'Enter Company Mobile Numbers'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'other_emails', 'label' => 'Other Emails', 'placeholder' => 'Enter Company Emails'])
                </div>
            </div>
            <div class="form-group">
                @include('comps.textarea', ['name' => 'comments', 'label' => 'Company Comments', 'placeholder' => 'Enter Company Comments'])
            </div>
            <div class="form-group">
                @include('comps.textarea', ['name' => 'website_comments', 'label' => 'Website Comments', 'placeholder' => 'Enter Website Comments'])
            </div>
            <div class="form-group d-flex justify-content-end">
                {{-- <a class="btn btn-primary next-tab" href="#">Add Trading Details</a> --}}
                <a class="btn btn-primary next-tab" href="#">Next</a>
            </div>
        </div>
    </div>
</div>