<label>{{ $label }}</label> <br>
<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" name="{{ $name }}" id="{{ $name }}_yes" class="custom-control-input" value="1">
    <label class="custom-control-label" for="{{ $name }}_yes">Yes</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" name="{{ $name }}" id="{{ $name }}_no" class="custom-control-input" value="0" checked>
    <label class="custom-control-label" for="{{ $name }}_no">No</label>
</div>