<label>{{ $label }}</label>
<br>
@foreach ($rows as $row)
    <div class="custom-control custom-checkbox custom-control-inline">
        <input class="custom-control-input" type="checkbox" id="{{ $row->name }}" name="{{ $name }}[]" value="{{ $row->id }}">
        <label class="custom-control-label" for="{{ $row->name }}">{{ $row->name }}</label>
    </div>
@endforeach