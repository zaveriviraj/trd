@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-8">
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
                                {{-- @isset($company->hasRelationship)<span class="badge badge-{{ $company->relationship_class }}">{{ $company->relationship }}</span>@endisset --}}
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
        </div>

        <div class="col-md-4">
            <div class="row mb-4">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header">Add New Note</div>
                        <div class="card-body">
                            <form action="{{ route('companies.notes.create', $company->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <textarea name="body" id="body" rows="5" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary">Save Note</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">Notes From Rapaport Users</div>
                        <div class="card-body" style="max-height: 20rem; overflow-y: auto">
                            @forelse ($company->notes as $note)
                                <div class="mb-4 pb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>{{ $note->user->name }} said...</strong>
                                        <p class="text-muted">{{ $note->created_at->diffForHumans() }}</p>
                                    </div>
                                    <p>{{ $note->body }}</p>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">Company Relationship</div>
                        <div class="card-body">
                            <form action="{{ route('companies.relationship.create', $company->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>
                                        Relations
                                    </label>
                                    <br>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="number" id="{{ $i }}" class="custom-control-input" value="{{ $i }}">
                                            <label class="custom-control-label" for="{{ $i }}">{{ $i }}</label>
                                        </div>
                                    @endfor
                                    <button class="btn btn-primary">Save Relation</button>
                                    @if ($company->relations->contains('user_id', auth()->id()))
                                        <p class="mt-4">Current Relation: {{ $company->relations->firstWhere('user_id', auth()->id())->number }}</p>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">Relationship With Other Company Users</div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Rating</th>
                                        <th>Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($company->relations as $relation)
                                        <tr>
                                            <td>
                                                <strong>{{ $relation->user->name }}</strong>
                                            </td>
                                            <td>
                                                <span>{{ $relation->number }}</span>
                                            </td>
                                            <td>{{ $relation->updated_at->diffForHumans() }}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

</div>
@endsection