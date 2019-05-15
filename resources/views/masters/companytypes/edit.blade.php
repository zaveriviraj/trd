@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Company Type: {{ $companytype->name }}</div>

                <div class="card-body">
                    <form action="{{ route('companytypes.update', $companytype->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Company Type</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $companytype->name }}" placeholder="Company Type Label" required autofocus>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Edit Company Type</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection