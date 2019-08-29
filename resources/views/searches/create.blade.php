@extends('layouts.app')

@push('styles')
    <style>
        .option-box { cursor: pointer; display: flex; justify-content: center; align-items: center; color: #fff; text-align: center; }
        .d-grid { display: grid; grid-gap: 10px; grid-auto-rows: minmax(45px, auto); }
        .d-grid-6 { grid-template-columns: repeat(6, 1fr); }
        .d-grid-12 { grid-template-columns: repeat(12, 1fr); }
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

                        <div class="row search-single mb-4">
                            <div class="col-2">
                                <h5>Shapes:</h5>
                                <a href="#" class="clear-search"><small>Clear</small></a>
                            </div>
                            <div class="col-10">
                                <div class="options-list d-grid d-grid-6">
                                    @foreach ($shapes as $shape)
                                        <div class="bg-secondary option-box" data-selected-id="{{ $shape->id }}">{{ $shape->name }}</div>
                                    @endforeach
                                </div>
                                <input type="text" name="shapes" class="invisible search-input">
                            </div>
                        </div>

                        <div class="row search-parameter mb-4">
                            <div class="col-2">
                                <h5>Size:</h5>
                                <a href="#" class="clear-search"><small>Clear</small></a>
                            </div>
                            <div class="col-10">
                                <div class="options-list d-grid d-grid-6">
                                    @foreach ($sizes as $size)
                                        <div class="bg-secondary option-box" data-start-id="{{ $size->size_start }}" data-end-id="{{ $size->size_end }}">{{ $size->name }}</div>
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
                                <div class="options-list d-grid d-grid-12">
                                    @foreach ($colors as $color)
                                        <div class="bg-secondary option-box" data-start-id="{{ $color->id }}" data-end-id="{{ $color->id }}">{{ $color->name }}</div>
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
                                <div class="options-list d-grid d-grid-6">
                                    @foreach ($cuts as $cut)
                                        <div class="bg-secondary option-box" data-start-id="{{ $cut->id }}" data-end-id="{{ $cut->id }}">{{ $cut->name }}</div>
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
                                <div class="options-list d-grid d-grid-12">
                                    @foreach ($clarities as $clarity)
                                        <div class="bg-secondary option-box" data-start-id="{{ $clarity->id }}" data-end-id="{{ $clarity->id }}">{{ $clarity->name }}</div>
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
            let selected = $element.hasClass('selected-parameter');
            let $parameter = $element.parents('.search-parameter');
            let val = '';

            if ( selected && ( $element.is($parameter.find('.selected-parameter:first')) ||$element.is($parameter.find('.selected-parameter:last')) ) ) {
                $element.addClass('bg-secondary').removeClass('bg-primary selected-parameter');
            } else {
                $element.addClass('bg-primary selected-parameter').removeClass('bg-secondary');
            }

            if ($parameter.find('.selected-parameter').length > 1) {
                $parameter.find('.selected-parameter:first').nextUntil($parameter.find('.selected-parameter:last')).removeClass('bg-secondary').addClass('bg-primary selected-parameter');
            }
            val = $parameter.find('.selected-parameter:first').data('start-id') + '-' + $parameter.find('.selected-parameter:last').data('end-id');
            $parameter.find('.search-input').val(val);
        });
        $('.search-parameter .clear-search').on('click', function(e) {
            e.preventDefault();
            $(this).parents('.search-parameter').find('.options-list div').addClass('bg-secondary').removeClass('bg-primary selected-parameter');
            $(this).parents('.search-parameter').find('.search-input').val('');
        });
        // $('.search-parameter .option-box').on('click', function(e) {
            // e.preventDefault();
            // let $element = $(this);
            // let $parent = $element.parent();
            // let $parameter = $element.parents('.search-parameter');
            // let val = '';
// 
            // if ( $element.is($parameter.find('.selected-parameter:first')) || $element.is($parameter.find('.selected-parameter:last')) )
            // {
                // console.log('here');
                // $element.removeClass('bg-primary selected-parameter').addClass('bg-secondary');
                // val = $parameter.find('.selected-parameter:first').data('start-id') + '-' + $parameter.find('.selected-parameter:last').data('end-id');
                // console.log($parameter.find('.search-input').val());
                // return;
            // }
// 
            // let $exist = $parent.find('.bg-primary');
            // $element.removeClass('bg-secondary').addClass('bg-primary selected-parameter');
//             
            // if ($exist.length) {
                // $parameter.find('.selected-parameter:first').nextUntil($parameter.find('.selected-parameter:last')).removeClass('bg-secondary').addClass('bg-primary selected-parameter');
                // val = $parameter.find('.selected-parameter:first').data('start-id') + '-' + $parameter.find('.selected-parameter:last').data('end-id');
            // } else {
                // val = $parameter.find('.selected-parameter').data('start-id') + '-' + $parameter.find('.selected-parameter').data('end-id');
            // }
//             
            // $parameter.find('.search-input').val(val);
            // console.log($parameter.find('.search-input').val());
        // });
// 
        // $('.search-parameter .clear-search').on('click', function(e) {
            // e.preventDefault();
            // $(this).parents('.search-parameter').find('.options-list div').addClass('bg-secondary').removeClass('bg-primary selected-parameter');
            // $(this).parents('.search-parameter').find('.search-input').val('');
        // });
    </script>
@endpush
