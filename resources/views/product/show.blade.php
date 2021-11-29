@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div style="text-align : center;">
                        <img src="{{ $Product->image }}" width="400" height="400" alt=""><br></div>
                        <a href="/product/{{ $Product->id }}">{{ $Product->name }}</a>
                        <p class="btn-holder"><a href="{{ route('add.to.cart', $Product->id) }}" class="btn btn-secondary btn-block text-center" role="button">カートに入れる</a> </p>
                        <td colspan="5" class="text-right">
                            <a href="{{ url('/') }}" class="btn btn-secondary btn-block text-center"><i class="fa fa-angle-left"></i> お買い物を続ける</a>
                        </td>
                    </div>
                    <div class="card-body">
                        {{ $Product->amount }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
