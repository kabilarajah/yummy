@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

@section('title', 'Your Cart')

<div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-3" >@include('partials.carousal')</div>

	<hr>

	<div role="separator" class="divider"> </div>

@section('content')

	@if(Session::has('cart'))

		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item">
							<span class="badge">  {{ $product['qty'] }}</span>
							<strong>{{ $product['item']['title'] }}</strong>
							<span class="label label-success">{{ $product['price'] }}</span>
							<span> &nbsp; </span>
							<span >
								<a href="{{ route('product.increaseByOne',['id'=> $product['item']['id']]) }}" title=""><i class="fa fa-plus" aria-hidden="true"></i> Increase 1</a>
								<a href="{{ route('product.reduceByOne',['id'=> $product['item']['id']]) }}" title=""><i class="fa fa-minus-circle" aria-hidden="true"></i> Reduce 1</a>
								<a href="{{ route('product.remove',['id'=> $product['item']['id']]) }}" title=""><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

							</span>
							
						</li>
					@endforeach
				</ul>
			</div>
		</div>

	
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-7 col-sm-offset-5 ">
				<h4><strong>Total: {{$totalPrice}}</strong></h4>
			</div>

				 
		</div>

		<hr>



		                        <form action="{{route('checkout')}}" method="post">

                                {{ csrf_field() }}
                                <div class="input-group col-md-4">

                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">

                                   {{--  @foreach($products as $product)

                                    <input type="hidden" name="seller" value="{{$product['item']['sellers']}}">


                                    @endforeach --}}


                                    <button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-cutlery" aria-hidden="true"></i>  Place Order
                                        </button>

                                </div>
  
                             
                            </form>
                        </div>



























		
	


	@else

		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>No Items in Cart !!! <a href="/">Let's Start Shopping</a> </h2>
			</div>
		</div>


	@endif

@endsection