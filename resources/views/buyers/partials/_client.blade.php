<div class="tab-pane fade active show" id="list-client" role="tabpanel" aria-labelledby="list-client-list">
    <div class="card">
        <div class="card-header">Client Details</div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col">
                    <label for="date">Select Date</label>
                    <input type="text" class="form-control date_input" id="date" placeholder="Select Date">
                </div>
                <div class="form-group col">
                    <label for="br_no">Buy Request <small>(Auto Generated)</small></label>
                    <input type="text" class="form-control" id="br_no" value="10001" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="client">Select Client</label>
                <select name="client" id="client" class="form-control custom-select select2">
                    <option>123 Company 1</option>
                    <option>234 Company 2</option>
                    <option>345 Company 3</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="client_type">Client Type</label>
                    <input type="text" class="form-control" id="client_type" readonly>
                </div>
                <div class="form-group col">
                    <label for="client_location">Client Location</label>
                    <input type="text" class="form-control" id="client_location" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="client_contact">Contact Name</label>
                    <input type="text" class="form-control" id="client_contact" readonly>
                </div>
                <div class="form-group col">
                    <label for="client_contact_number">Contact Number</label>
                    <input type="text" class="form-control" id="client_contact_number" readonly>
                </div>
            </div>
            <div class="form-group">
                <label>Request Status</label> <br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="request_status" id="request_open" class="custom-control-input" checked>
                    <label class="custom-control-label" for="request_open">Open</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="request_status" id="request_close" class="custom-control-input">
                    <label class="custom-control-label" for="request_close">Close</label>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <a class="btn btn-primary next-tab" href="#">Add Stone Details</a>
            </div>
        </div>
    </div>
</div>