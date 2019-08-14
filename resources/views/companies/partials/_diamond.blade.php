<div class="tab-pane fade" id="list-diamond" role="tabpanel" aria-labelledby="list-diamond-list">
    <div class="card">
        <div class="card-header">Diamond Details</div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col">
                    @include('comps.radio', ['name' => 'sight_holder', 'label' => 'Sight Holder'])
                </div>
                <div class="form-group col">
                    @include('comps.multiple', ['name' => 'roughs', 'rows' => $roughs, 'label' => 'Rough Sights'])
                </div>
            </div>
            <div class="form-group">
                @include('comps.checks', ['name' => 'shapes', 'rows' => $shapes, 'label' => 'Shapes'])
            </div>
            <div class="form-group">
                @include('comps.checks', ['name' => 'sizes', 'rows' => $sizes, 'label' => 'Sizes'])
            </div>
            <div class="form-group">
                @include('comps.checks', ['name' => 'colors', 'rows' => $colors, 'label' => 'Colors'])
            </div>
            <div class="form-group">
                @include('comps.checks', ['name' => 'clarities', 'rows' => $clarities, 'label' => 'Clarities'])
            </div>
            <div class="form-group">
                @include('comps.checks', ['name' => 'cuts', 'rows' => $cuts, 'label' => 'Cut'])
            </div>
            <div class="form-group">
                @include('comps.checks', ['name' => 'certs', 'rows' => $certs, 'label' => 'Certs'])
            </div>
        </div>
    </div>
    
    <div class="card mt-4">
        <div class="card-header">Jewelry Details</div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-2">
                    @include('comps.radio', ['name' => 'jewellery_manufacturing', 'label' => 'Jewelry Manufacturing'])
                </div>
                <div class="form-group col-2">
                    @include('comps.radio', ['name' => 'jewellery_trading', 'label' => 'Jewelry Trading'])
                </div>
                <div class="form-group col-2">
                    @include('comps.input', ['name' => 'jewelry_locations', 'label' => 'Jewelry Store Locations', 'placeholder' => 'Enter Jewelry Store Locations'])
                </div>
                <div class="form-group col">
                    @include('comps.checks', ['name' => 'products', 'rows' => $products, 'label' => 'Jewelry Products'])
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save Information</button>
            </div>
        </div>
    </div>
</div>