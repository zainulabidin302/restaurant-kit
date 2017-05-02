@extends('layouts.app', ['title' => 'Create a new Recipie'])

@section('content')

<div class="row form-container">
    <div class="col-md-4 col-xs-12">

<form action="/recipies" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Description</label>
    <input type="text" name="description" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Recipie Group</label>
    <select name="group" id="group" class="form-control">
      @foreach($groups as $group) 
        <option value="{{$group['id']}}">{{$group['title']}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="title">Image Gallery</label>
    <input type="file" multiple="" disabled="" name="image" class="form-control">
  </div>


  <div class="form-group">
    <table class="table table-bordered table-striped" id="recipie-container">
      <thead>
        <tr>
          <th colspan="3">
              Create A Recipie
          </th>
        </tr>

        <tr>
          <th colspan="3">
            <a href="#" class="btn btn-primary-inverse">
              Reset
            </a>
          </th>
        </tr>
        <tr>
          <th>Ingredient Title</th>
          <th>Quantity</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody >
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
  
  </div>
  
</form>
        
    </div>
</div>



@endsection

@section('footer')
  
  <script>

  var EXPORT_RecipieIngredientsList  = {!! json_encode($ingredients, true) !!}; </script>
  <script src="{{asset('js/recipie.js')}}"></script>
  

@endsection