@extends('layouts.app') 

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container{ width: 100% !important; }
    </style>
@endpush

@section('content')
<div class="container-fluid">
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-10">
                <div class="tab-content" id="nav-tabContent">
                    @include('companies.partials._company')
                    {{-- @include('companies.partials._contact') --}}
                    @include('companies.partials._additional')
                    @include('companies.partials._diamond')
                </div>
            </div>
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-company-list" data-toggle="list" href="#list-company">Company Details</a>
                    {{-- <a class="list-group-item list-group-item-action" id="list-contact-list" data-toggle="list" href="#list-contact">Individual Details</a> --}}
                    <a class="list-group-item list-group-item-action" id="list-additional-list" data-toggle="list" href="#list-additional">Additional Details</a>
                    <a class="list-group-item list-group-item-action" id="list-diamond-list" data-toggle="list" href="#list-diamond">Diamond Details</a>
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