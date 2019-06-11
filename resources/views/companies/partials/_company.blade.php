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
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Company Name">
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Company Email">
                </div>
                <div class="form-group col">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Company Phone">
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
                    <label for="promotions">Promotions &amp; Trade Shows</label>
                    <input type="text" class="form-control" id="promotions" name="promotions" placeholder="Please add names of Trade Shows manually">
                </div>
                <div class="form-group col">
                    <label for="brands">Brands</label>
                    <input type="text" class="form-control" id="brands" name="brands" placeholder="Enter Company's Brands">
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">RAP Division</div>
        <div class="card-body">
            <div class="form-group">
                <label for="rapnet">RapNet</label>
                <input type="text" class="form-control" id="rapnet" name="rapnet" placeholder="Enter RapNet Account #">
            </div>
            <div class="form-group">
                <label for="gia">GIA Lab Direct</label>
                <input type="text" class="form-control" id="gia" name="gia" placeholder="Enter GIA Lab Direct Account #">
            </div>
            <div class="form-group">
                <label for="auctions">Auctions</label>
                <input type="text" class="form-control" id="auctions" name="auctions" placeholder="Enter Auctions Account #">
            </div>
            <div class="form-group">
                <label for="raplab">RapLab</label>
                <input type="text" class="form-control" id="raplab" name="raplab" placeholder="Enter RapLab Account #">
            </div>
            <div class="form-group">
                <label for="advt_acc">ADVT</label>
                <input type="text" class="form-control" id="advt_acc" name="advt" placeholder="Enter ADVT Account #">
            </div>
            <div class="form-group d-flex justify-content-end">
                {{-- <a class="btn btn-primary next-tab" href="#">Add Individual Details</a> --}}
                <a class="btn btn-primary next-tab" href="#">Next</a>
            </div>
        </div>
    </div>
</div>