@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<div class="container-fluid">
    <form action="">
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">Select Buy Request</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="br_number">Select BR#</label>
                            <select name="br_number" id="br_number" class="form-control custom-select select2">
                                <option>101 Crwon Ring</option>
                                <option>102 Crwon Ring</option>
                                <option>103 Crwon Ring</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="card">
                    <div class="card-header">Select Sell Offers</div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="so_number">Select SO#</label>
                                <select name="so_number" id="so_number" class="form-control custom-select select2">
                                    <option>1 Amrit Corporation</option>
                                    <option>2 Amrit Corporation</option>
                                    <option>3 Amrit Corporation</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="offered_price">Offered Price</label>
                                <input type="text" class="form-control" id="offered_price" value="$410" readonly>
                            </div>
                            <div class="form-group col">
                                <label for="so_quantity">Sold Quantity</label>
                                <input type="text" class="form-control" id="so_quantity" placeholder="Enter Sold Quantity">
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <a class="btn btn-outline-primary" href="#">Add Another Seller</a>
                            <a class="btn btn-primary" href="#">Save Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
