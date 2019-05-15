@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>List of Priorities</span>
                        <a href="{{ route('priorities.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle fa-fw mr-1"></i> Add New</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Color</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($priorities as $priority)
                                <tr>
                                    <td>{{ $priority->name }}</td>
                                    <td><span class="badge badge-pill badge-primary" style="background-color: {{ $priority->color }}">{{ $priority->name }}</span></td>
                                    <td class="text-right"><a href="{{ route('priorities.edit', $priority->id) }}" class="btn"><i class="far fa-edit fa-fw"></i></a></td>
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