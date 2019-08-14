@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{ route('import') }}">Import 1</a>
                    <a href="{{ route('import2') }}">Import 2</a>
                    <a href="{{ route('import3') }}">Import 3</a>
                    <a href="{{ route('import4') }}">Import 4</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
