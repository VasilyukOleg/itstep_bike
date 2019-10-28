@extends('layouts.master')

@section('title')
    Корзина
@endsection
@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="label label-success"> {{ $product['price'] }}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primay btn-xs dropdown-toggle" data-toggle="dropdown">Выбирите действие <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Удалить 1 ед</a></li>
                                    <li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Удалить всё</a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <strong style="color: white">Сумма: {{ $totalPrice }}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Оплата</a>
            </div>
        </div>
    @else

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2 style="color: white">Нет товаров в корзине!</h2>
            </div>
        </div>
    @endif

@endsection