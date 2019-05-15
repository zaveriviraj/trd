@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>List of Cuts</span>
                        <a href="{{ route('cuts.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle fa-fw mr-1"></i> Add New</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cuts as $cut)
                                <tr>
                                    <td>{{ $cut->name }}</td>
                                    <td class="text-right"><a href="{{ route('cuts.edit', $cut->id) }}" class="btn"><i class="far fa-edit fa-fw"></i></a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">No Records Found</td>
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