@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Company Size: {{ $companysize->name }}</div>

                <div class="card-body">
                    <form action="{{ route('companysizes.update', $companysize->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Company Size</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $companysize->name }}" placeholder="Company Size Label" required autofocus>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Edit Company Size</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection