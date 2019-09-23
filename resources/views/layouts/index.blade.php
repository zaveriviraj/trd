@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>List of layouts</span>
                        <a href="{{ route('layouts.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle fa-fw mr-1"></i> Add New</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Created</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($layouts as $layout)
                                <tr>
                                    <td>{{ $layout->name }}</td>
                                    <td>{{ $layout->created_at->diffForHumans() }}</td>
                                    <td class="text-right"><a href="{{ route('layouts.edit', $layout->id) }}" class="btn"><i class="far fa-edit fa-fw"></i></a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No Records Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection