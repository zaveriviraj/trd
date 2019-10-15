@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Company Details</span>
                @if ($company->isFavorited)
                    <a href="{{ route('companies.favorite.remove', $company->id) }}" class="btn btn-outline-danger btn-sm">Remove From Favorite</a>
                @else
                    <a href="{{ route('companies.favorite.create', $company->id) }}" class="btn btn-outline-primary btn-sm">Add to Favorite</a>
                @endif
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-3">
                    <p class="card-text">Comapny Name</p>
                    <h5 class="card-title">{{ $company->company_name }}</h5>
                </div>
                <div class="col-md-3">
                    <p class="card-text">Contact Person</p>
                    <h5 class="card-title">
                        {{ $company->person ?: '-' }} <small>{{ $company->job_title ? '('. $company->job_title .')' : '' }}</small>
                        @isset($company->relationship)<span class="badge badge-{{ $company->relationship_class }}">{{ $company->relationship }}</span>@endisset
                    </h5>
                </div>
                <div class="col-md-3">
                    <p class="card-text">OFC #</p>
                    <h5 class="card-title"><a href="https://ofc.rapaport.com/Ofc3/CRM/Account.aspx?AccountID={{ $company->associations }}" target="_blank">{{ $company->associations }}</a> <small>{{ $company->divisions }}</small></h5>
                </div>
                <div class="col-md-3">
                    <p class="card-text">Company Size</p>
                    <h5 class="card-title">{{ $company->companysize ? $company->companysize->name : '' }}</h5>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-3">
                    <p class="card-text">Address</p>
                    <p class="card-text">{{ $company->address }}</p>
                </div>
                <div class="col-md-3">
                    <p class="card-text">Country</p>
                    <p class="card-text">{{ $company->city }} {{ $company->state }} {{ $company->country }} - {{ $company->zip }}</p>
                </div>
                <div class="col-md-3">
                    <p class="card-text">Website</p>
                    <h5 class="card-title">{{ $company->website }}</h5>
                </div>
                <div class="col-md-3">
                    <p class="card-text">Office</p>
                    <p class="card-text">{{ $company->office }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <p class="card-text">Cell</p>
                    <p class="card-text">{{ $company->cell_numbers ?: '-' }}</p>
                </div>
                <div class="col-md-3">
                    <p class="card-text">Email</p>
                    <p class="card-text">{{ $company->emails ?: '-' }}</p>
                </div>
                <div class="col-md-3">
                    <p class="card-text">Phone</p>
                    <p class="card-text">{{ $company->phones ?: '-' }}</p>
                </div>
                <div class="col-md-3">
                    <p class="card-text">Fax</p>
                    <p class="card-text">{{ $company->fax ?: '-' }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Company Details</div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-md-3">Comapny Name</dt>
                        <dd class="col-md-9">{{ $company->company_name }}</dd>
                        <dt class="col-md-3">Contact Person</dt>
                        <dd class="col-md-9">{{ $company->person ?: '-' }} <small>{{ $company->job_title ? '('. $company->job_title .')' : '' }}</small>
                        @isset($company->relationship)<span class="badge badge-{{ $company->relationship_class }}">{{ $company->relationship }}</span>@endisset</dd>
                        <dt class="col-md-3">OFC #</dt>
                        <dd class="col-md-9"><a href="https://ofc.rapaport.com/Ofc3/CRM/Account.aspx?AccountID={{ $company->associations }}" target="_blank">{{ $company->associations }}</a> <small>{{ $company->divisions }}</small></dd>
                        <dt class="col-md-3">Company Size</dt>
                        <dd class="col-md-9">{{ $company->companysize ? $company->companysize->name : '' }}</dd>
                        <dt class="col-md-3">Address</dt>
                        <dd class="col-md-9">{{ $company->address }}</dd>
                        <dt class="col-md-3">Country</dt>
                        <dd class="col-md-9">{{ $company->city }} {{ $company->state }} {{ $company->country }} - {{ $company->zip }}</dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Company Contact Details</div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-md-3">Website</dt>
                        <dd class="col-md-9"><a href="{{ $company->website }}">{{ $company->website ?: '-' }}</a></dd>
                        <dt class="col-md-3">Office</dt>
                        <dd class="col-md-9">{{ $company->office ?: '-' }}</dd>
                        <dt class="col-md-3">Cell</dt>
                        <dd class="col-md-9">{{ $company->cell_numbers ?: '-' }}</dd>
                        <dt class="col-md-3">Email</dt>
                        <dd class="col-md-9">{{ $company->emails ?: '-' }}</dd>
                        <dt class="col-md-3">Phone</dt>
                        <dd class="col-md-9">{{ $company->phones ?: '-' }}</dd>
                        <dt class="col-md-3">Fax</dt>
                        <dd class="col-md-9">{{ $company->fax ?: '-' }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection