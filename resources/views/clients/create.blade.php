@extends('layouts.app') 
@section('content')
<div class="container">
    <form action="">
        <div class="row">
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    @include('clients.partials._company')
                    @include('clients.partials._additional')
                    @include('clients.partials._contact')
                    @include('clients.partials._rap')
                    @include('clients.partials._trading')
                    @include('clients.partials._polishing')
                    @include('clients.partials._jewelry')
                </div>
            </div>
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action" id="list-company-list" data-toggle="list" href="#list-company">Company Details</a>
                    <a class="list-group-item list-group-item-action" id="list-additional-list" data-toggle="list" href="#list-additional">Additional Details</a>
                    <a class="list-group-item list-group-item-action" id="list-contact-list" data-toggle="list" href="#list-contact">Contact Details</a>
                    <a class="list-group-item list-group-item-action" id="list-rap-list" data-toggle="list" href="#list-rap">RAP Association</a>
                    <a class="list-group-item list-group-item-action" id="list-trading-list" data-toggle="list" href="#list-trading">Trading Details</a>
                    <a class="list-group-item list-group-item-action" id="list-polishing-list" data-toggle="list" href="#list-polishing">Polishing Details</a>
                    <a class="list-group-item list-group-item-action active" id="list-jewelry-list" data-toggle="list" href="#list-jewelry">Jewelry Details</a>
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