@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')




<div class="col-md-10 col-md-offset-1">

@section('content')

<div class="panel panel-default">


			<div class="panel-body">
				<div class="text-center">
					<h3><strong> Received Orders</strong></h3><hr>
					 </div>
					  
					    	<table class="table table-hover">
							  <thead>
							    <tr>
							      <th>#</th>
							      <th>Date</th>
							      <th>Customer Name</th>
							      <th>Order</th>
							    
							     
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($orders as $order)
							    <tr>
							      <th scope="row">{{$order->id}}</th>
							      <td><h5>{{$order->updated_at->format('l j F Y')}} ({{$order->updated_at->diffForHumans()}})</h5></td>
							      <td>{{$order->name}}</td>
								<td>@include('orders.popup')</td>


								<td>
								<form action="{{ route('order.delete',['id'=> $order->id])}}" method="POST">
								    {{ method_field('DELETE') }}
								    {{ csrf_field() }}


								    

								    <button type="submit" class="btn btn-danger "><i class="fa fa-trash-o" aria-hidden="true"></i></button>

									{{-- <button type="button" class="btn btn-success "><i class="fa fa-rocket" 	aria-hidden="true"></i></button> --}}

									{{-- <a href="{{ route('passdata',['id'=> $order->id])}}" class="btn btn-primary" role="button"><i class="fa fa-rocket" 	aria-hidden="true"></i></a> --}}
								</form>
							</td>



								@endforeach

									
							    </tr>

							  </tbody>
							</table>
		
		</div>
	</div>

</div>

@endsection