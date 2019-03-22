<div class="tab-pane fade active show" id="list-company" role="tabpanel" aria-labelledby="list-company-list">
    <div class="card">
        <div class="card-header">Company Details</div>
        <div class="card-body">
            <div class="form-group">
                <label for="company_priority">Priority</label>
                <input type="text" class="form-control" id="company_priority" placeholder="Enter Company Priority">
            </div>
            <div class="form-group">
                <label for="company_name">Name</label>
                <input type="text" class="form-control" id="company_name" placeholder="Enter Company Name">
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="company_email">Email</label>
                    <input type="email" class="form-control" id="company_email" placeholder="Enter Company Email">
                </div>
                <div class="form-group col">
                    <label for="company_phone">Phone</label>
                    <input type="text" class="form-control" id="company_phone" placeholder="Enter Company Phone">
                </div>
            </div>
            <div class="form-group">
                <label for="company_website">Website</label>
                <input type="url" class="form-control" id="company_website" placeholder="Enter Company Website">
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="company_size">Size</label>
                    <select name="company_size" id="company_size" class="form-control custom-select">
                        <option>Large</option>
                        <option>Medium</option>
                        <option>Small</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="company_type">Type</label>
                    <select name="company_type" id="company_type" class="form-control custom-select">
                        <option>Manufacturer</option>
                        <option>Dealer</option>
                        <option>Retailer</option>
                        <option>Media</option>
                        <option>Education</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Deals In</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="rough">
                    <label class="custom-control-label" for="rough">Rough</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="polished">
                    <label class="custom-control-label" for="polished">Polished</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="jewelry">
                    <label class="custom-control-label" for="jewelry">Jewelry</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="promotion_trade">Promotions &amp; Trade Shows</label>
                    <input type="text" class="form-control" id="promotion_trade" placeholder="Details of promotions & trade shows">
                </div>
                <div class="form-group col">
                    <label for="brands">Brands</label>
                    <input type="text" class="form-control" id="brands" placeholder="Enter Company's Brands">
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">RAP Division</div>
        <div class="card-body">
            <div class="form-group">
                <label for="rapnet_acc">RapNet</label>
                <input type="text" class="form-control" id="rapnet_acc" placeholder="Enter RapNet Account #">
            </div>
            <div class="form-group">
                <label for="gia_acc">GIA Lab Direct</label>
                <input type="text" class="form-control" id="gia_acc" placeholder="Enter GIA Lab Direct Account #">
            </div>
            <div class="form-group">
                <label for="auctions_acc">Auctions</label>
                <input type="text" class="form-control" id="auctions_acc" placeholder="Enter Auctions Account #">
            </div>
            <div class="form-group">
                <label for="raplab_acc">RapLab</label>
                <input type="text" class="form-control" id="raplab_acc" placeholder="Enter RapLab Account #">
            </div>
            <div class="form-group">
                <label for="advt_acc">ADVT</label>
                <input type="text" class="form-control" id="advt_acc" placeholder="Enter ADVT Account #">
            </div>
            <div class="form-group d-flex justify-content-end">
                <a class="btn btn-primary next-tab" href="#">Add Individual Details</a>
            </div>
        </div>
    </div>
</div>