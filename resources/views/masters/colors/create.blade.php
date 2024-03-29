@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Color</div>

                <div class="card-body">
                    <form action="{{ route('colors.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Color</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Color Label" required autofocus>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Add Color</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection