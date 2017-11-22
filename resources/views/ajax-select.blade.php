<option>--- Select State ---</option>
@if(!empty($comunas))
  @foreach($comunas as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif