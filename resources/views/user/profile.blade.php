
@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

@section('title', 'Profile')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>User Profile</h1>
			<hr>
			<h2>My Orders</h2>

			@foreach($orders as $order)

				
				<div class="panel panel-default">
				  <div class="panel-body">

				    <ul class="list-group">

					  <table class="table table-striped">
						  <thead>
						  	<tr><h4>{{$order->updated_at->format('l j F Y')}}</h4></tr>
						    <tr>
						      <th>Qty</th>
						      <th>Order Detail</th>
						      <th>Price</th>
						    </tr>
						  </thead>

						@foreach($order->cart->items as $item)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $item['qty'] }}</th>
						      <td>{{$item['item']['title']}} </td>
						      {{--<td>{{$product->price}}</td>--}}
						      <td><span class="badge">Rs. {{ $item['price'] }}</span></td>
						    </tr>
						 @endforeach
						    <tr>
						    
						      <th scope="row">
						      <td  colspan="1"><div class="pull-right"><strong>Total</strong></div></td>
						      <td><strong>{{ $order->cart->totalPrice }}</strong></td>

						    </tr>
						  </tbody>
						</table>

					</ul>
				  </div> 
				</div>	

				@endforeach

				
				  <div class="panel-footer">
				  	<strong> Total Price: Rs.  </strong>
				  </div>
				
				

		</div>
	</div>

@stop



