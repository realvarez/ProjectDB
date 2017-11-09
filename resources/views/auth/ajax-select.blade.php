<option>--- Select State ---</option>
@if(!empty($comuna))
  @foreach($comuna as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif