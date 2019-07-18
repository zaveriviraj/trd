@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Start New Search</h4>
                        <a href="{{ route('searches.index') }}" class="btn btn-link">Saved Searches</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="company_size">Company Size</label>
                                <select name="company_size[]" id="company_size" class="form-control custom-select select2" multiple>
                                    @foreach ($companysizes as $companysize)
                                        <option value="{{ $companysize->id }}">{{ $companysize->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="company_type">Company Type</label>
                                <select name="company_type[]" id="company_type" class="form-control custom-select select2" multiple>
                                    @foreach ($companytypes as $companytype)
                                        <option value="{{ $companytype->id }}">{{ $companytype->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="company_deal">Company Deal</label>
                                <select name="company_deal[]" id="company_deal" class="form-control custom-select select2" multiple>
                                    @foreach ($companydeals as $companydeal)
                                        <option value="{{ $companydeal->id }}">{{ $companydeal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="sizes">Sizes</label>
                                <select name="sizes" id="sizes" class="form-control custom-select">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->name }}">{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="shapes">Shapes</label>
                                <select name="shapes[]" id="shapes" class="form-control custom-select select2" multiple>
                                    @foreach ($shapes as $shape)
                                        <option value="{{ $shape->id }}">{{ $shape->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="colors">Colors</label>
                                <select name="colors" id="colors" class="form-control custom-select">
                                    <option value="d-f">D-F</option>
                                    <option value="g-i">G-I</option>
                                    <option value="j-k">J-K</option>
                                    <option value="l-p">L-P</option>
                                    <option value="q-z">Q-Z</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="clarities">Clarities</label>
                                <select name="clarities" id="clarities" class="form-control custom-select">
                                    <option value="1-2">FL-IF</option>
                                    <option value="1-4">FL-VS</option>
                                    <option value="1-7">FL-I1</option>
                                    <option value="3-4">VVS-VS</option>
                                    <option value="3-5">VVS-SI</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="cuts">Cuts</label>
                                <select name="cuts" id="cuts" class="form-control custom-select">
                                    <option value="1-2">EX-VG</option>
                                    <option value="1-3">EX-GD</option>
                                    <option value="1-4">EX-FR</option>
                                    <option value="1-5">EX-PR</option>
                                    <option value="2-3">VG-GD</option>
                                    <option value="2-4">VG-FR</option>
                                    <option value="2-5">VG-PR</option>
                                    <option value="3-4">GD-FR</option>
                                    <option value="3-5">GD-PR</option>
                                    <option value="4-5">FR-PR</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="certs">Certs</label>
                                <select name="certs[]" id="certs" class="form-control custom-select select2" multiple>
                                    @foreach ($certs as $cert)
                                        <option value="{{ $cert->id }}">{{ $cert->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="designations">Designations</label>
                                <select name="designations[]" id="designations" class="form-control custom-select select2" multiple>
                                    @foreach ($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                
                            </div>
                            <div class="form-group col">
                                
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name your Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Save Search & Continue</button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
