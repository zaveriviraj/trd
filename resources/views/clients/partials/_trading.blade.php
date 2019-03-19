<div class="tab-pane fade" id="list-trading" role="tabpanel" aria-labelledby="list-trading-list">
    <div class="card">
        <div class="card-header">Trading Details</div>
        <div class="card-body">
            <div class="form-group">
                <label for="rough_details">Rough</label>
                <input type="text" class="form-control" id="rough_details" placeholder="Enter Rough Details">
            </div>
            <div class="form-group">
                <label>Sight Holder</label> <br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="sight_holder" id="yes" class="custom-control-input">
                    <label class="custom-control-label" for="yes">Yes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="sight_holder" id="no" class="custom-control-input" checked>
                    <label class="custom-control-label" for="no">No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="sight_details">Sight Details</label>
                <input type="text" class="form-control" id="sight_details" placeholder="Enter Sight Details" disabled>
            </div>
            <div class="form-group">
                <label for="tender_details">Tender Details</label>
                <input type="text" class="form-control" id="tender_details" placeholder="Enter Tender Details">
            </div>
            <div class="form-group">
                <label for="rough_deals">Rough Deals</label>
                <input type="text" class="form-control" id="rough_deals" placeholder="Enter Rough Deals Details">
            </div>
            <div class="form-group d-flex justify-content-end">
                <a class="btn btn-primary next-tab" href="#">Add Polishing Details</a>
            </div>
        </div>
    </div>
</div>