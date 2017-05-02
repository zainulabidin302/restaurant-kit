@extends('layouts.app', ['title' => 'Create new Ingredient'])

@section('content')

<div class="row form-container">
    <div class="col-md-4 col-xs-12">

<form action="/ingredients" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control">
  </div>


  <div class="form-group">
    <label for="title">Unit</label>
    <select name="unit" id="unit" class="form-control">
        @foreach($units as $unit)
            <option value="{{$unit['id']}}">{{$unit['title']}}</option>
        @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="title">Minimum Reorder Level</label>
    <input type="text" name="min" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Maximum Stock Level</label>
    <input type="text" name="max" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Photo</label>
    <input type="file" disabled="" name="image" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Save</button>

</form>
        
    </div>
</div>



@endsection

@section('footer')
@endsection