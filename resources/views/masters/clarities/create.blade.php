@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Clarity</div>

                <div class="card-body">
                    <form action="{{ route('clarities.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Clarity</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Clarity Label" required autofocus>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Add Clarity</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection