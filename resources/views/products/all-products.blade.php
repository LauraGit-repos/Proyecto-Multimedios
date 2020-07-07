@extends('layout')

@section('title','Productos')

@section('body')
    
    {{-- Session message --}}
    @if(session()->get('msg'))
        <input type="hidden" id="success-msg" value="{{session()->get('msg')}}">
    @endif

    <h1 class="text-center main-title">Todos los productos</h1>
    <div id="main-container" class="flex-justify-center @if( $products->count()>0) tiles-grid @endif" >
    @forelse ($products as $product)
        <div data-role="tile" data-effect="hover-slide-up" data-size="large">
            <div class="slide-front">
                <img src="{{asset('img/products/'.$product->photo)}}" alt="{{$product->code}}"
                 class="h-100 w-100">
            </div>
            <div class="slide-back slide-back d-flex flex-justify-center flex-align-center p-4 op-mauve">
                <p class="text-center">
                    {{$product->description}}
                    <br>
                    Por solo ${{$product->price}}
                    <br>
                    <a href="{{url('/products/edit',['id'=>$product->id])}}" class="button warning mt-2">Editar</a>
                    <button class="button alert mt-2" onclick="Eliminar()">Eliminar</button>
                    <form action="{{url('/products/delete',['id'=>$product->id])}}"
                          style="display:none;" method="POST" id="delete-form">
                        @method('delete')
                        @csrf
                    </form>
                </p>
            </div>
            <h3 class="branding-bar fg-white text-center">
                {{$product->code}} - {{$product->name}}
            </h3>
        </div>
    @empty
        <div class="w-100 mt-10">
            <h3 class="text-center">No hay productos para mostrar</h3>
        </div>
    @endforelse
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/product.js')}}"></script>
    <script src="{{asset('js/messages.js')}}"></script>
@endsection