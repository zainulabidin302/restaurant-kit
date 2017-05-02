@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset">
            <div class="panel panel-default">
                
                
                <div class="panel-heading"><h3>Hola, Today's Menu is here!</h3></div>
                <div class="panel-body">
                    @foreach($recipies as $recipie) 
                        <div class="menu-item col-lg-4">
                            
                            <div class="menu-img">                            
                            {{ Html::image('storage/recipie/' . $recipie['image_url'],
                            '',
                            ['class' => 'recipie'])
                            }}  
                            </div>
                            <div class="menu-title">
                                
                                <div class="description"> 
                                    {{ $recipie['title'] }} 
                                </div>
                                <div class="price">
                                    Rs. {{ $recipie['price'] }}
                                </div>
                                <div class="description"> 
                                    <a href="#" data-id="{{$recipie['id']}}" class="btn btn-primary order-now">Add To Order</a>
                                </div>

                            </div>

                        </div>
                    @endforeach
                    


                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset">
                <div class="panel panel-default">
                    
                    
                    <div class="panel-heading"><h3>Order Details</h3></div>
                    <div class="panel-body">
                    <div class="alert alert-success" style="display:none;" id="notify"></div>
                        <table class="table table-bordered" id="order-table">
                            <thead>
                                <tr>
                                    <th>Recipie</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>


 <a href="#" class="order-confirm btn btn-primary-inverse" >Confirm Order</a>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
</div>
@endsection

@section('footer')
  
  <script>

  var EXPORT_RecipieList = {!! json_encode($recipies, true) !!}; 
  </script>
  <script src="{{asset('js/menu.js')}}"></script>
  

@endsection