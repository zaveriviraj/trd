@extends('layouts.app')

@push('styles')
    <style>
        .color-box { cursor: pointer }
    </style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Start New Search</h4>
                        <a href="{{ route('searches.index') }}" class="btn btn-link">Saved Searches</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <h5>Colors:</h5>
                                <a href="#" id="clear-colors"><small>Clear Search</small></a>
                            </div>
                            <div class="col-10">
                                <div class="row" id="colors-list">
                                    @foreach ($colors as $color)
                                        <div class="col-1 p-2 m-1 bg-secondary text-white text-center color-box" data-color-id="{{ $color->id }}">{{ $color->name }}</div>
                                    @endforeach
                                </div>
                                <input type="text" id="colors" name="colors" class="invisible">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('.color-box').on('click', function(e) {
            let $element = $(this);
            let $parent = $element.parent();
            let val = '';

            let $exist = $parent.find('.bg-primary');
            $element.removeClass('bg-secondary').addClass('bg-primary selected-color');

            if ($exist.length) {
                $('.selected-color:eq(0)').nextUntil(".selected-color:last").removeClass('bg-secondary').addClass('bg-primary selected-color');
                val = $('.selected-color:eq(0)').text() + '-' + $('.selected-color:last').text();
            } else {
                val = $('.selected-color').text() + '-' + $('.selected-color').text();
            }
            
            $('#colors').val(val);
            console.log($('#colors').val());
        });

        $('#clear-colors').on('click', function(e) {
            e.preventDefault();
            $('#colors-list div').addClass('bg-secondary').removeClass('bg-primary selected');
            $('#colors').val('');
        })
    </script>
@endpush
