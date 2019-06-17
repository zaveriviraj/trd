<div class="tab-pane fade" id="list-additional" role="tabpanel" aria-labelledby="list-additional-list">
    <div class="card">
        <div class="card-header">Additional Details</div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col">
                    <label for="other_landlines">Other Landline Numbers</label>
                    <input type="text" class="form-control" id="other_landlines" name="other_landlines" placeholder="Enter Company Landline Numbers">
                </div>
                <div class="form-group col">
                    <label for="other_mobiles">Other Mobile Numbers</label>
                    <input type="text" class="form-control" id="other_mobiles" name="other_mobiles" placeholder="Enter Mobile Numbers">
                </div>
                <div class="form-group col">
                    <label for="other_emails">Other Emails</label>
                    <input type="email" class="form-control" id="other_emails" name="other_emails" placeholder="Enter Company Emails">
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter Company Address"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter City Name">
                </div>
                <div class="form-group col">
                    <label for="zip">Zip Code</label>
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter Zip Code">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="state_id">State</label>
                    <select name="state_id" id="state_id" class="form-control custom-select">
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="country_id">Country</label>
                    <select name="country_id" id="country_id" class="form-control custom-select">
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- <div class="form-row">
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
            </div> --}}
            <div class="form-group">
                <label for="manufacturing_units">Manufacturing Units Details</label>
                <textarea class="form-control" id="manufacturing_units" name="manufacturing_units" placeholder="Enter Manufacturing Units Details"></textarea>
            </div>
            <div class="form-group d-flex justify-content-end">
                {{-- <a class="btn btn-primary next-tab" href="#">Add Trading Details</a> --}}
                <a class="btn btn-primary next-tab" href="#">Next</a>
            </div>
        </div>
    </div>
</div>