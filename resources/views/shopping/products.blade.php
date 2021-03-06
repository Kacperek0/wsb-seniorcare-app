@extends('layouts.app')

@section('title', 'Products')

@section('content')

    <div class="container products mt-5 pt-5 pb-5 mb-5">

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ $product->description }}</p>
                            <p><strong>Price: </strong> {{ $product->price }} PLN</p>
                            <p class=" btn-holder"><a href="{{ url('shopping/add-to-cart/'.$product->id) }}" class="button_cart  btn btn-warning btn-block text-center" role="button"><span>Add to cart</span></a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>

@endsection
