@extends('layouts.app')

@push('styles')
    <style>
        .option-box { cursor: pointer }
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

                        <div class="row clarity-search mb-4">
                            <div class="col-2">
                                <h5>Size:</h5>
                                <a href="#" class="clear-search"><small>Clear</small></a>
                            </div>
                            <div class="col-10">
                                <div class="row options-list">
                                    @foreach ($sizes as $size)
                                        <div class="col-2 p-2 m-1 bg-secondary text-white text-center option-box" data-start-id="{{ $size->size_start }}" data-end-id="{{ $size->size_end }}">{{ $size->name }}</div>
                                    @endforeach
                                </div>
                                <input type="text" name="sizes" class="invisible search-input">
                            </div>
                        </div>

                        <div class="row search-parameter mb-4">
                            <div class="col-2">
                                <h5>Color:</h5>
                                <a href="#" class="clear-search"><small>Clear</small></a>
                            </div>
                            <div class="col-10">
                                <div class="row options-list">
                                    @foreach ($colors as $color)
                                        <div class="col-1 p-2 m-1 bg-secondary text-white text-center option-box" data-option-id="{{ $color->id }}">{{ $color->name }}</div>
                                    @endforeach
                                </div>
                                <input type="text" name="colors" class="invisible search-input">
                            </div>
                        </div>

                        <div class="row search-parameter mb-4">
                            <div class="col-2">
                                <h5>Make:</h5>
                                <a href="#" class="clear-search"><small>Clear</small></a>
                            </div>
                            <div class="col-10">
                                <div class="row options-list">
                                    @foreach ($cuts as $cut)
                                        <div class="col-2 p-2 m-1 bg-secondary text-white text-center option-box" data-option-id="{{ $cut->id }}">{{ $cut->name }}</div>
                                    @endforeach
                                </div>
                                <input type="text" name="makes" class="invisible search-input">
                            </div>
                        </div>

                        <div class="row search-parameter mb-4">
                            <div class="col-2">
                                <h5>Clarity:</h5>
                                <a href="#" class="clear-search"><small>Clear</small></a>
                            </div>
                            <div class="col-10">
                                <div class="row options-list">
                                    @foreach ($clarities as $clarity)
                                        <div class="col-1 p-2 m-1 bg-secondary text-white text-center option-box" data-option-id="{{ $clarity->id }}">{{ $clarity->name }}</div>
                                    @endforeach
                                </div>
                                <input type="text" name="clarities" class="invisible search-input">
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('.search-parameter .option-box').on('click', function(e) {
            e.preventDefault();
            let $element = $(this);
            let $parent = $element.parent();
            let $parameter = $element.parents('.search-parameter');
            let val = '';

            let $exist = $parent.find('.bg-primary');
            $element.removeClass('bg-secondary').addClass('bg-primary selected-parameter');

            if ($exist.length) {
                $parameter.find('.selected-parameter:eq(0)').nextUntil($parameter.find('.selected-parameter:last')).removeClass('bg-secondary').addClass('bg-primary selected-parameter');
                val = $parameter.find('.selected-parameter:eq(0)').data('option-id') + '-' + $parameter.find('.selected-parameter:last').data('option-id');
            } else {
                val = $parameter.find('.selected-parameter').data('option-id') + '-' + $parameter.find('.selected-parameter').data('option-id');
            }
            
            $parameter.find('.search-input').val(val);
            console.log($parameter.find('.search-input').val());
        });

        $('.search-parameter .clear-search').on('click', function(e) {
            e.preventDefault();
            $(this).parents('.search-parameter').find('.options-list div').addClass('bg-secondary').removeClass('bg-primary selected-parameter');
            $(this).parents('.search-parameter').find('.search-input').val('');
        });

        $('.clarity-search .option-box').on('click', function(e) {
            e.preventDefault();
            let $element = $(this);
            let $parent = $element.parent();
            let $parameter = $element.parents('.clarity-search');
            let val = '';

            let $exist = $parent.find('.bg-primary');
            $element.removeClass('bg-secondary').addClass('bg-primary selected-parameter');

            if ($exist.length) {
                $parameter.find('.selected-parameter:eq(0)').nextUntil($parameter.find('.selected-parameter:last')).removeClass('bg-secondary').addClass('bg-primary selected-parameter');
                val = $parameter.find('.selected-parameter:eq(0)').data('start-id') + '-' + $parameter.find('.selected-parameter:last').data('end-id');
            } else {
                val = $parameter.find('.selected-parameter').data('start-id') + '-' + $parameter.find('.selected-parameter').data('end-id');
            }
            
            $parameter.find('.search-input').val(val);
            console.log($parameter.find('.search-input').val());
        });

        $('.clarity-search .clear-search').on('click', function(e) {
            e.preventDefault();
            $(this).parents('.clarity-search').find('.options-list div').addClass('bg-secondary').removeClass('bg-primary selected-parameter');
            $(this).parents('.clarity-search').find('.search-input').val('');
        });
    </script>
@endpush
