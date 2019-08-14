<div class="tab-pane fade active show" id="list-company" role="tabpanel" aria-labelledby="list-company-list">
    <div class="card">
        <div class="card-header">Company Details</div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col">
                    @include('comps.input', ['name' => 'company_name', 'label' => 'Company Name', 'placeholder' => 'Enter Company Name'])
                </div>
                <div class="form-group col">
                    @include('comps.dropdown', ['name' => 'companysize_id', 'rows' => $companysizes, 'label' => 'Company Size'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'first_name', 'label' => 'First Name', 'placeholder' => 'Enter First Name'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'last_name', 'label' => 'Last Name', 'placeholder' => 'Enter Last Name'])
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    @include('comps.input', ['name' => 'job_title', 'label' => 'Job Title', 'placeholder' => 'Enter Job Title'])
                </div>
                <div class="form-group col-4">
                    <label>Relations</label> <br>
                    @for ($i = 1; $i <= 10; $i++)
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="relationship" id="{{ $i }}" class="custom-control-input" value="{{ $i }}">
                            <label class="custom-control-label" for="{{ $i }}">{{ $i }}</label>
                        </div>
                    @endfor
                </div>
                <div class="form-group col">
                    @include('comps.multiple', ['name' => 'company_type', 'rows' => $companytypes, 'label' => 'Company Type'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'exhibiting_markets', 'label' => 'Exhibiting / Markets', 'placeholder' => 'Enter Exhibiting / Markets'])
                </div>
            </div>
            <div class="form-group">
                @include('comps.checks', ['name' => 'companydeals', 'rows' => $companydeals, 'label' => 'Deals In'])
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter Company Address"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    @include('comps.input', ['name' => 'city', 'label' => 'City', 'placeholder' => 'Enter City Name'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'zip', 'label' => 'Zip Code', 'placeholder' => 'Enter Zip Code'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'state', 'label' => 'State', 'placeholder' => 'Enter State Name'])
                </div>
                <div class="form-group col">
                    @include('comps.input', ['name' => 'country', 'label' => 'Country', 'placeholder' => 'Enter Country Name'])
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">RAP Division</div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="rapnet">RapNet</label>
                        <input type="text" class="form-control" id="rapnet" name="rapnet" placeholder="Enter RapNet Account #">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="gia">GIA Lab Direct</label>
                        <input type="text" class="form-control" id="gia" name="gia" placeholder="Enter GIA Lab Direct Account #">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="raplab">RapLab</label>
                        <input type="text" class="form-control" id="raplab" name="raplab" placeholder="Enter RapLab Account #">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="advt_acc">ADVT</label>
                        <input type="text" class="form-control" id="advt_acc" name="advt" placeholder="Enter ADVT Account #">
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                {{-- <a class="btn btn-primary next-tab" href="#">Add Individual Details</a> --}}
                <a class="btn btn-primary next-tab" href="#">Next</a>
            </div>
        </div>
    </div>
</div>