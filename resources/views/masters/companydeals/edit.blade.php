@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Company Deals In: {{ $companydeal->name }}</div>

                <div class="card-body">
                    <form action="{{ route('companydeals.update', $companydeal->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Company Deals In</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $companydeal->name }}" placeholder="Company Deals In Label" required autofocus>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Edit Company Deals In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection