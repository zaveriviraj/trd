<div class="tab-pane fade" id="list-additional" role="tabpanel" aria-labelledby="list-additional-list">
    <div class="card">
        <div class="card-header">Additional Details</div>
        <div class="card-body">
            <div class="form-group">
                <label for="company_address">Address</label>
                <textarea class="form-control" id="company_address" placeholder="Enter Company Address"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter City Name">
                </div>
                <div class="form-group col">
                    <label for="zipcode">Zip Code</label>
                    <input type="text" class="form-control" id="zipcode" placeholder="Enter Zip Code">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="state">State</label>
                    <select name="state" id="state" class="form-control custom-select">
                        <option>Gujarat</option>
                        <option>Maharashtra</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="country">Country</label>
                    <select name="country" id="country" class="form-control custom-select">
                        <option>India</option>
                        <option>Israel</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="country-code">Country Code</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="country-code-addon">+</span>
                        </div>
                        <input type="text" id="country-code" class="form-control" placeholder="Enter Country Code">
                    </div>
                </div>
                <div class="form-group col">
                    <label for="state-code">State Code</label>
                    <input type="text" class="form-control" id="state-code" placeholder="Enter State Code">
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <a class="btn btn-primary next-tab" href="#">Add Contact Details</a>
            </div>
        </div>
    </div>
</div>