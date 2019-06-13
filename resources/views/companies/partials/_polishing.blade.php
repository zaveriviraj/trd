<div class="tab-pane fade" id="list-polishing" role="tabpanel" aria-labelledby="list-polishing-list">
    <div class="card">
        <div class="card-header">Polished Details</div>
        <div class="card-body">
            <div class="form-group">
                <label>Size</label>
                <br>
                @foreach ($sizes as $size)
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="{{ $size->name }}" name="sizes[]" value="{{ $size->id }}">
                        <label class="custom-control-label" for="{{ $size->name }}">{{ $size->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="size_comments">Size Extra Comments</label>
                <textarea class="form-control" id="size_comments" name="size_comments" placeholder="Enter Size Extra Comments"></textarea>
            </div>
            <div class="form-group">
                <label>Shape</label>
                <br>
                @foreach ($shapes as $shape)
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="{{ $shape->name }}" name="shapes[]" value="{{ $shape->id }}">
                        <label class="custom-control-label" for="{{ $shape->name }}">{{ $shape->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="shape_comments">Shape Extra Comments</label>
                <textarea class="form-control" id="shape_comments" name="shape_comments" placeholder="Enter Shape Extra Comments"></textarea>
            </div>
            <div class="form-group">
                <label>Color</label>
                <br>
                @foreach ($colors as $color)
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="{{ $color->name }}" name="colors[]" value="{{ $color->id }}">
                        <label class="custom-control-label" for="{{ $color->name }}">{{ $color->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="color_comments">Color Extra Comments</label>
                <textarea class="form-control" id="color_comments" name="color_comments" placeholder="Enter Color Extra Comments"></textarea>
            </div>
            <div class="form-group">
                <label>Clarity</label>
                <br>
                @foreach ($clarities as $clarity)
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="{{ $clarity->name }}" name="clarities[]" value="{{ $clarity->id }}">
                        <label class="custom-control-label" for="{{ $clarity->name }}">{{ $clarity->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="clarity_comments">Clarity Extra Comments</label>
                <textarea class="form-control" id="clarity_comments" name="clarity_comments" placeholder="Enter Clarity Extra Comments"></textarea>
            </div>
            <div class="form-group">
                <label>Cut</label>
                <br>
                @foreach ($cuts as $cut)
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="{{ $cut->name }}" name="cuts[]" value="{{ $cut->id }}">
                        <label class="custom-control-label" for="{{ $cut->name }}">{{ $cut->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="cut_comments">Cut Extra Comments</label>
                <textarea class="form-control" id="cut_comments" name="cut_comments" placeholder="Enter Cut Extra Comments"></textarea>
            </div>
            <div class="form-group">
                <label>Certs</label>
                <br>
                @foreach ($certs as $cert)
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input class="custom-control-input" type="checkbox" id="{{ $cert->name }}" name="certs[]" value="{{ $cert->id }}">
                        <label class="custom-control-label" for="{{ $cert->name }}">{{ $cert->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="certs_comments">Certs Extra Comments</label>
                <textarea class="form-control" id="certs_comments" name="certs_comments" placeholder="Enter Certs Extra Comments"></textarea>
            </div>
            <div class="form-group">
                <label for="branches_comments">Branches Extra Comments</label>
                <textarea class="form-control" id="branches_comments" name="branches_comments" placeholder="Enter Branches Extra Comments"></textarea>
            </div>
            <div class="form-group">
                <label for="product_comments">Product Extra Comments</label>
                <textarea class="form-control" id="product_comments" name="product_comments" placeholder="Enter Product Extra Comments"></textarea>
            </div>
            <div class="form-group d-flex justify-content-end">
                <a class="btn btn-primary next-tab" href="#">Next</a>
                {{-- <a class="btn btn-primary next-tab" href="#">Add Jewlery Details</a> --}}
            </div>
        </div>
    </div>
</div>