@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Shape</div>

                <div class="card-body">
                    <form action="{{ route('shapes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Shape</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Shape Label" required autofocus>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Add Shape</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection