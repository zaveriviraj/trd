<div class="tab-pane fade" id="list-company" role="tabpanel" aria-labelledby="list-company-list">
    <div class="card">
        <div class="card-header">Company Details</div>
        <div class="card-body">
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
            <div class="form-group d-flex justify-content-end">
                <a class="btn btn-primary next-tab" href="#">Add Additional Details</a>
            </div>
        </div>
    </div>
</div>