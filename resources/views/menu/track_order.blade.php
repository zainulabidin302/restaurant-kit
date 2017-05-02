@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Your Order!</h3></div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">{{ "Order ID" }}</th>
                                <td colspan="2">{{ $order->uuid }}</td>
                            </tr>
                            <tr>
                                <th colspan="2">{{ "Date/Time" }}</th>
                                <td colspan="2">{{ $order->updated_at }}</td>
                            </tr>

                            <tr>
                                <td colspan="4"></td>
                                
                            </tr>

                            <tr>
                                <th>#</th>
                                <th>Recipie</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>
                    
                  @foreach($order->orderItems as $orderItem) 
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{$orderItem->recipie->title }}</td>
                                <td>{{$orderItem->quantity }}</td>
                                <td>{{ $orderItem->recipie->price }}</td>
                            </tr>
                  @endforeach

                            <tr>
                                <td colspan=2> </td>
                                <td > Total </td>
                                <td>{{$total}}</td>
                            </tr>
                  </tbody>
                    </table>
                    
                  

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset">
                <div class="panel panel-default">
                    
                    
                    <div class="panel-heading"><h3>Tracking Details</h3></div>
                    <div class="panel-body">
                    <div class="alert alert-success" style="display:none;" id="notify"></div>
                        <table class="table table-bordered" id="order-table">
                            <thead>
                                <tr>
                                    <td colspan=2>Estimated Arrival Time</td>
                                    
                                </tr>
                                <tr>
                                    <th>Remaining Time for Cooking</th>
                                    <td>None</td>
                                </tr>
                                <tr>
                                    <th>Remaining Time for Arrival</th>
                                    <td>None</td>
                                </tr>
                                <tr>
                                    <th>Total Remaining Time</th>
                                    <td>None</td>
                                </tr>
                                <tr>
                                <tr>
                                    <td colspan=2>Order Info</td>
                                </tr>
                                    
                                </tr>
                                <tr>
                                    <th>Takeaway Driver</th>
                                    <td>None</td>
                                </tr>
                                <tr>
                                    <th>Cook</th>
                                    <td>Quantity</td>
                                </tr>
                                <tr>
                                    <th>Waiter</th>
                                    <td>Quantity</td>
                                </tr>
                                <tr>
                                    <td colspan=2>Tracking Feedback</td>
                                </tr>
                                    
                                </tr>
                                <tr>
                                    <th>Satisfied</th>
                                    <td>
                                        <input type="radio" name="tracking_feedback">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Neutral</th>
                                    <td>
                                        <input type="radio" name="tracking_feedback" checked="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Angry</th>
                                    <td>
                                        <input type="radio" name="tracking_feedback">
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>


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

 

@endsection