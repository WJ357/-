@extends('layout')

@section('content')

<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->image }}" width="200" height="200" alt="">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p><strong>金額: </strong> {{ $product->price }}円</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-secondary btn-block text-center" role="button">カートに入れる</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
