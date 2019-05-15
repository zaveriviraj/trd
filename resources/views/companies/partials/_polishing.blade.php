<div class="tab-pane fade" id="list-polishing" role="tabpanel" aria-labelledby="list-polishing-list">
    <div class="card">
        <div class="card-header">Polishing Details</div>
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
                <label for="size_comments">Size Comments</label>
                <textarea class="form-control" id="size_comments" name="size_comments" placeholder="Enter Size Comments"></textarea>
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
                <label for="shape_comments">Shape Comments</label>
                <textarea class="form-control" id="shape_comments" name="shape_comments" placeholder="Enter Shape Comments"></textarea>
            </div>
            <div class="form-group">
                <label>Color</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_d-f" name="colors_arr[]" value="D-F">
                    <label class="custom-control-label" for="color_d-f">D-F</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_g-h" name="colors_arr[]" value="G-H">
                    <label class="custom-control-label" for="color_g-h">G-H</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_i-k" name="colors_arr[]" value="I-K">
                    <label class="custom-control-label" for="color_i-k">I-K</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_l-n" name="colors_arr[]" value="L-N">
                    <label class="custom-control-label" for="color_l-n">L-N</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_dark" name="colors_arr[]" value="Dark">
                    <label class="custom-control-label" for="color_dark">Dark</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_ttlb" name="colors_arr[]" value="TTLB">
                    <label class="custom-control-label" for="color_ttlb">TTLB</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_tlb" name="colors_arr[]" value="TLB">
                    <label class="custom-control-label" for="color_tlb">TLB</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_ttlc" name="colors_arr[]" value="TTLC">
                    <label class="custom-control-label" for="color_ttlc">TTLC</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_tlc" name="colors_arr[]" value="TLC">
                    <label class="custom-control-label" for="color_tlc">TLC</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_fc" name="colors_arr[]" value="FC">
                    <label class="custom-control-label" for="color_fc">FC</label>
                </div>
            </div>
            <div class="form-group">
                <label for="color_comments">Color Comments</label>
                <textarea class="form-control" id="color_comments" name="color_comments" placeholder="Enter Color Comments"></textarea>
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
                <label for="clarity_comments">Clarity Comments</label>
                <textarea class="form-control" id="clarity_comments" name="clarity_comments" placeholder="Enter Clarity Comments"></textarea>
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
                <label for="cut_comments">Cut Comments</label>
                <textarea class="form-control" id="cut_comments" name="cut_comments" placeholder="Enter Cut Comments"></textarea>
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
                <label for="certs_comments">Certs Comments</label>
                <textarea class="form-control" id="certs_comments" name="certs_comments" placeholder="Enter Certs Comments"></textarea>
            </div>
            <div class="form-group">
                <label for="branches_comments">Branches Comments</label>
                <textarea class="form-control" id="branches_comments" name="branches_comments" placeholder="Enter Branches Comments"></textarea>
            </div>
            <div class="form-group">
                <label for="product_comments">Product Comments</label>
                <textarea class="form-control" id="product_comments" name="product_comments" placeholder="Enter Product Comments"></textarea>
            </div>
            <div class="form-group d-flex justify-content-end">
                <a class="btn btn-primary next-tab" href="#">Add Jewlery Details</a>
            </div>
        </div>
    </div>
</div>