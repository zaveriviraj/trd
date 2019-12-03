@extends('layouts.app')

@section('title') Edit Search - {{ $search->name }} @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Search Name</div>

                <div class="card-body">
                    <form action="{{ route('searches.update', $search->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $search->name }}" placeholder="List Name" required autofocus>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Edit Name</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection