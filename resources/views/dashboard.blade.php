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

                    <form action="{{ route('import') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="import_file" name="import_file" accept=".xls,.xlsx" required>
                            <label class="custom-file-label" for="import_file">Choose file...</label>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Upload File</button>
                        </div>
                    </form>
                </div>

                <div class="card-footer">
                    <a href="{{ asset('sample.xlsx') }}" download>Download Sample File</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
