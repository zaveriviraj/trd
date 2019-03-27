@extends('layouts.app') 

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<div class="container">
    <form action="">
        <div class="row">
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    @include('sellers.partials._client')
                    @include('sellers.partials._stone')
                </div>
            </div>
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-client-list" data-toggle="list" href="#list-client">Client Details</a>
                    <a class="list-group-item list-group-item-action" id="list-stone-list" data-toggle="list" href="#list-stone">Stone Details</a>
                </div>

                {{-- <div class="list-group mt-4">
                    <button type="submit" class="btn btn-success">Save Information</button>
                    <a href="#" class="btn btn-danger mt-2">Cancel</a>
                </div> --}}
            </div>
        </div>
    </form>
</div>
@endsection