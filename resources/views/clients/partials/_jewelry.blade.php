<div class="tab-pane fade" id="list-jewelry" role="tabpanel" aria-labelledby="list-jewelry-list">
    <div class="card">
        <div class="card-header">Jewelry Details</div>
        <div class="card-body">
            <div class="form-group">
                <label>Jewelry Manufacturing</label> <br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="jewelry_manufacturing" id="jewelry_yes" class="custom-control-input" checked>
                    <label class="custom-control-label" for="jewelry_yes">Yes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="jewelry_manufacturing" id="jewelry_no" class="custom-control-input">
                    <label class="custom-control-label" for="jewelry_no">No</label>
                </div>
            </div>
            <div class="form-group">
                <label>Products</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="jewlery_prod_rings">
                    <label class="custom-control-label" for="jewlery_prod_rings">Rings</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="jewlery_prod_earrings">
                    <label class="custom-control-label" for="jewlery_prod_earrings">Earrings</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="jewlery_prod_bracelets">
                    <label class="custom-control-label" for="jewlery_prod_bracelets">Bracelets</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="jewlery_prod_nceklaces">
                    <label class="custom-control-label" for="jewlery_prod_nceklaces">Necklaces</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="jewlery_prod_soltaires">
                    <label class="custom-control-label" for="jewlery_prod_soltaires">Soltaires</label>
                </div>
            </div>
            <div class="form-group">
                <label for="jewelry_locations">Jewelry Locations</label>
                <textarea class="form-control" id="jewelry_locations" placeholder="Enter Jewelry Locations"></textarea>
            </div>
            <div class="form-group">
                <label for="jewelery_comments">Jewelery Comments</label>
                <textarea class="form-control" id="jewelery_comments" placeholder="Enter Jewelery Comments"></textarea>
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save Information</button>
            </div>
        </div>
    </div>
</div>