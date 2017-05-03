@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')

        <div class="align-spacer"></div>
        <div class="col-xs-12 col-sm-12 notification-header">


            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>New Orders</h3></div>
                    <div class="panel-body">
                        <div id="new-notification-queue">
                            <ul class="order-queue">
                                <li>Loading orders</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4">
           <div class="panel panel-default">
                
                
                <div class="panel-heading"><h3>Cooking Orders</h3></div>
                <div class="panel-body">
                    <div id="cooking-notification-queue" >
                        
                        <ul class="order-queue">
                            <li>Loading orders</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
          
            <div class="col-lg-4">
             <div class="panel panel-default ">
                
                
                <div class="panel-heading"><h3>Ready Orders</h3></div>
                <div class="panel-body">
                    <div id="ready-notification-queue" >
                        <ul class="order-queue">
                            <li>Loading orders</li>
                        </ul>
                    </div>
                </div>
            </div>

</div>



                </div>



@endsection

@section('footer')
    
    <script>
        var EXPORT_ListOfAllOrders = {!! json_encode($orders, true) !!}
    </script>
    <script src="{{ asset('js/socket.js') }}"></script>

@endsection
