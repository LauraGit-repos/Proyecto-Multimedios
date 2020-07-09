@extends('layout')

@section('title','Carrito')


@section('body')
    <div id="cart-body"></div>
    <br>
    <div class="text-center">
        <a href="{{url('/products/pay')}}" class="button button-submit mw-100 mw-50-md mw-25-lg">Ir a pagar</a>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/cart.js')}}"></script>

@endsection