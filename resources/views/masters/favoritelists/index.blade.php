@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Favorite Lists</span>
                        <a href="{{ route('favoritelists.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle fa-fw mr-1"></i> Add New</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Companies</td>
                                <td>Created</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($lists as $list)
                                <tr>
                                    <td>{{ $list->name }}</td>
                                    <td>{{ $list->favorites->count() }}</td>
                                    <td>{{ $list->created_at->diffForHumans() }}</td>
                                    <td class="text-right">
                                        <form action="{{ route('favoritelists.destroy', $list->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('favoritelists.show', $list->id) }}" class="btn"><i class="far fa-eye fa-fw"></i></a>
                                            <a href="{{ route('favoritelists.edit', $list->id) }}" class="btn"><i class="far fa-edit fa-fw"></i></a>
                                            <button class="btn delete-btn" type="submit"><i class="fa fa-trash fa-fw"></i></button>
                                        </form>
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