<div class="tab-pane fade active show" id="list-company" role="tabpanel" aria-labelledby="list-company-list">
    <div class="card">
        <div class="card-header">Company Details</div>
        <div class="card-body">
            <div class="form-group">
                <label for="priority_id">Priority</label>
                <select name="priority_id" id="priority_id" class="form-control">
                    @foreach ($priorities as $priority)
                        <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Company Name">
                </div>
                <div class="form-group col">
                    <label for="owner_name">Owner Name</label>
                    <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Enter Owner Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="landline">Landline</label>
                    <input type="text" class="form-control" id="landline" name="landline" placeholder="Enter Company Landline Number">
                </div>
                <div class="form-group col">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
                </div>
                <div class="form-group col">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Company Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Enter Company Website">
                </div>
                <div class="form-group col">
                    <label for="companysize_id">Company Size</label>
                    <select name="companysize_id" id="companysize_id" class="form-control">
                        @foreach ($companysizes as $companysize)
                            <option value="{{ $companysize->id }}">{{ $companysize->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Type</label>
                <br>
                @foreach ($companytypes as $companytype)
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="{{ $companytype->name }}" name="companytypes[]" value="{{ $companytype->id }}">
                        <label class="custom-control-label" for="{{ $companytype->name }}">{{ $companytype->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label>Deals In</label>
                <br>
                @foreach ($companydeals as $companydeal)
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="{{ $companydeal->name }}" name="companydeals[]" value="{{ $companydeal->id }}">
                        <label class="custom-control-label" for="{{ $companydeal->name }}">{{ $companydeal->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="exhibitions">Exhibitions</label>
                    <input type="text" class="form-control" id="exhibitions" name="exhibitions" placeholder="Please add names of Exhibition company participates">
                </div>
                <div class="form-group col">
                    <label for="brands">Brands</label>
                    <input type="text" class="form-control" id="brands" name="brands" placeholder="Enter Company's Brands">
                </div>
            </div>
            <div class="form-group">
                <label for="deals_comments">Deals Comments</label>
                <textarea class="form-control" id="deals_comments" name="deals_comments" placeholder="Enter Deals Comments"></textarea>
            </div>
            <div class="form-group">
                <label for="company_comments">Company Comments</label>
                <textarea class="form-control" id="company_comments" name="company_comments" placeholder="Enter Deals Comments"></textarea>
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
                        <label for="auctions">Auctions</label>
                        <input type="text" class="form-control" id="auctions" name="auctions" placeholder="Enter Auctions Account #">
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col"></div>
            </div>
            <div class="form-group d-flex justify-content-end">
                {{-- <a class="btn btn-primary next-tab" href="#">Add Individual Details</a> --}}
                <a class="btn btn-primary next-tab" href="#">Next</a>
            </div>
        </div>
    </div>
</div>