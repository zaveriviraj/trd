<label for="{{ $name }}">{{ $label }}</label>
<select name="{{ $name }}[]" id="{{ $name }}" class="form-control custom-select select2" multiple>
    @foreach ($rows as $row)
        <option value="{{ $row->id }}">{{ $row->name }}</option>
    @endforeach
</select>