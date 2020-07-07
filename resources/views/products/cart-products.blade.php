@extends('layout')

@section('title','Carrito')


@section('body')
    <div id="cart-body"></div>
    <br>
    <div class="text-center">
        <button type="button" id="btn-logout" class="button">Ir a pagar</button>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/cart.js')}}"></script>
@endsection