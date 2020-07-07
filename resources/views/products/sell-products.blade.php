@extends('layout')

@section('title','Productos')


@section('body')
    
<div data-role="window" data-place="left-center"
        data-icon="<span class='mif-cart'></span>"
        data-resizable="false" data-btn-min="false"
        class="p-2" data-title="Carrito" data-btn-max="false">
    Carrito de Compras
    <ul id="my-cart">
    <ul>
</div>
    <p class="text-center main-title">
        <a href="{{url('/products/cart')}}" class="button button-submit mw-100 mw-50-md mw-25-lg">Ir al carrito</a>
        </p>
    <div id="card-container">
    @forelse ($products as $product)
        <div class="card">
            <div class="card-content">
                <img src="{{asset('img/products/'.$product->photo)}}" class="h-100 w-100">
            </div>
            <div class="card-footer">
                <div class="row">
                    <p class="text-center">
                            {{$product->description}}
                        <br>
                            Precio: ${{$product->price}}
                        <br>
                        <button type="button" id="{{$product->id}}" data-price="{{$product->price}}"
                         data-name="{{$product->name}}" data-button="true"
                         data-photo="{{asset('img/products/'.$product->photo)}}"
                         class="button button-submit mt-2" onclick="AddToCart(this.id);">Agregar</button>
                    </p>
                </div>
            </div>
        </div>
    @empty
        <div class="w-100 mt-10">
            <h3 class="text-center">No hay productos disponibles</h3>
        </div>
    @endforelse
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/product.js')}}"></script>
    <script src="{{asset('js/sell.js')}}"></script>
@endsection