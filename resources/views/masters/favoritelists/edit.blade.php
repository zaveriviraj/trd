@extends('layouts.app')
@section('title') Edit List - {{ $favoritelist->name }} @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit List: {{ $favoritelist->name }}</div>

                <div class="card-body">
                    <form action="{{ route('favoritelists.update', $favoritelist->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">List</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $favoritelist->name }}" placeholder="List Name" required autofocus>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Edit List</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection