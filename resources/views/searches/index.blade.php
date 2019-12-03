@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>My Saved Search List</span>
                        <a href="{{ route('searches.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle fa-fw mr-1"></i> Add New</a>
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
                            @forelse ($userSearches as $search)
                                <tr>
                                    <td>{{ $search->name }}</td>
                                    <td>{{ $search->created_at->diffForHumans() }}</td>
                                    <td class="text-right">
                                        <form action="{{ route('searches.destroy', $search->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('searches.show', $search->id) }}" class="btn"><i class="far fa-eye fa-fw"></i></a>
                                            <a href="{{ route('searches.edit', $search->id) }}" class="btn"><i class="far fa-edit fa-fw"></i></a>
                                            <button class="btn delete-btn" type="submit"><i class="fa fa-trash fa-fw"></i></button>
                                        </form>
                                    </td>
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

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Searches From Other Users</span>
                        <a href="{{ route('searches.create') }}" class="btn">&nbsp;</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Created By</td>
                                <td>Created</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($searches as $search)
                                <tr>
                                    <td>{{ $search->name }}</td>
                                    <td>{{ $search->user->name }}</td>
                                    <td>{{ $search->created_at->diffForHumans() }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('searches.show', $search->id) }}" class="btn"><i class="far fa-eye fa-fw"></i></a>
                                        <a href="{{ route('searches.replicate', $search->id) }}" class="btn"><i class="far fa-copy fa-fw"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No Records Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">{{ $searches->links() }}</div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('.delete-btn').on('click', function(e) {
            e.preventDefault();
            let confirmDialog = confirm('Are you sure?');
            if (confirmDialog) {
                $(this).parent('form').submit();
            }
        });
    </script>
@endpush