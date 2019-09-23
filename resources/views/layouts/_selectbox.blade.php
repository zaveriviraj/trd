<div class="col">
    <div class="custom-control custom-checkbox custom-control-inline">
        <input class="custom-control-input" type="checkbox" id="{{ $id }}" name="fields[]" value="{{ $value }}" {{ $disabled ?? '' }} {{ $checked ?? '' }}>
        <label class="custom-control-label" for="{{ $id }}">{{ $field_name }}</label>
    </div>
</div>