@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
    <div class="row">
        <div class="col-xl-9">
            
            <div class="card mb-4" id="company-details">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Company Details</span>
                        <div>
                            <a href="{{ url()->previous() }}" class="btn btn-link btn-sm">Go Back</a>
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-outline-primary btn-sm">Edit Company</a>
                            
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-text text-muted">Comapny Name</div>
                            <h5 class="card-title">{{ $company->company_name }}</h5>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Contact Person</div>
                            <h5 class="card-title">
                                {{ $company->person ?: '-' }} <small>{{ $company->job_title ? '('. $company->job_title .')' : '' }}</small>
                                {{-- @isset($company->hasRelationship)<span class="badge badge-{{ $company->relationship_class }}">{{ $company->relationship }}</span>@endisset --}}
                            </h5>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">OFC #</div>
                            <h5 class="card-title">
                                <a href="https://ofc.rapaport.com/Ofc3/CRM/Account.aspx?AccountID={{ $company->associations }}" target="_blank">
                                    {{ $company->associations }}
                                    <small><i class="fas fa-external-link-alt fa-sm"></i></small>
                                </a>
                                {{-- <small>{{ $company->divisions }}</small> --}}
                            </h5>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Company Size</div>
                            <h5 class="card-title">{{ $company->companysize ? $company->companysize->name : '' }}</h5>
                        </div>
                    </div>
        
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-text text-muted">Address</div>
                            <div class="card-text">{{ $company->address }} <br> {{ $company->city }} {{ $company->state }} - {{ $company->zip }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Country</div>
                            <h5 class="card-title"> {{ $company->country }}</h5>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Website</div>
                            <div class="card-text">
                                @isset($company->website)
                                    <a href="{{ $company->website }}" target="_blank">
                                        {{ $company->website }}
                                        <small><i class="fas fa-external-link-alt fa-sm"></i></small>
                                    </a>    
                                @endisset
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Office</div>
                            <div class="card-text">{{ $company->office }}</div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card-text text-muted">Cell</div>
                            <div class="card-text">{{ $company->cell_numbers ?: '-' }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Email</div>
                            <div class="card-text">{{ $company->emails ?: '-' }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Phone</div>
                            <div class="card-text">{{ $company->phones ?: '-' }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Fax</div>
                            <div class="card-text">{{ $company->fax ?: '-' }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4" id="diamond-details">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Diamond Details</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-text text-muted">Sight</div>
                            <h5 class="card-title">{{ $company->sight_holder ? 'Yes' : 'No' }}</h5>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Rough</div>
                            <div class="card-text">{!! implode(', ' , $company->roughs->pluck('name')->toArray()) !!}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Trader</div>
                            <h5 class="card-title">Yes / No</h5>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Shapes</div>
                            <div class="card-text">{!! implode(', ' , $company->shapes->pluck('name')->toArray()) !!}</div>
                        </div>
                    </div>
        
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-text text-muted">Size</div>
                            <div class="card-text">{{ $company->deals_size }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Color</div>
                            <div class="card-text">{{ $company->deals_color }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Clarity</div>
                            <div class="card-text">{{ $company->deals_clarity }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Make</div>
                            <div class="card-text">{{ $company->deals_make }}</div>
                        </div>
                    </div>
        
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-text text-muted">Cert</div>
                            <div class="card-text">{!! implode(', ' , $company->certs->pluck('name')->toArray()) !!}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Manufacturing Units</div>
                            <div class="card-text">{{ $company->manufacturing_units }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Branches</div>
                            <div class="card-text">{{ $company->branches }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Exhibiting Markets</div>
                            <div class="card-text">{{ $company->exhibiting_markets }}</div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-text text-muted">Jewelry Manufacturing</div>
                            <div class="card-text">{{ $company->jewellery_manufacturing ? 'Yes' : 'No' }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-text text-muted">Jewelry Trading</div>
                            <div class="card-text">{{ $company->jewellery_trading ? 'Yes' : 'No' }}</div>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4" id="company-comments">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Comments</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card-text text-muted">Comments</div>
                            <div class="card-text">
                                <p class="lead">{{ $company->comments }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card-text text-muted">Website Comments</div>
                            <div class="card-text">
                                <p class="lead">{{ $company->website_comments }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <aside class="col-xl-3">
            <div class="row mb-4">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header">Notes From Rapaport Users</div>
                        <div class="card-body" style="max-height: 30rem; overflow-y: auto">
                            @forelse ($company->notes as $note)
                                <single-note :data="{{ $note }}" :editable-flag="{{ $note->user->id == auth()->id() ? 1 : 0 }}"></single-note>
                            @empty
                                <p>No data yet.</p>
                            @endforelse
                        </div>
                        <div class="card-footer">
                            <form action="{{ route('companies.notes.create', $company->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <textarea name="body" id="body" rows="2" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary">Add New Note</button>
                            </form>
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
                                    @if ($company->relations->contains('user_id', auth()->id()))
                                        <p class="mt-4">Current Relation: {{ $company->relations->firstWhere('user_id', auth()->id())->number }}</p>
                                    @endif
                                </div>
                                <button class="btn btn-primary">Save Relation</button>
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
                                        <th class="text-center">Rating</th>
                                        <th class="text-right">Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($company->relations as $relation)
                                        <tr>
                                            <td>
                                                <strong>{{ $relation->user->name }}</strong>
                                            </td>
                                            <td class="text-center">
                                                <span>{{ $relation->number }}</span>
                                            </td>
                                            <td class="text-right">{{ $relation->updated_at->diffForHumans() }}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    
    

</div>
@endsection