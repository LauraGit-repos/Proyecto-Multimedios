@extends('layout')

@section('title','Editar Producto')


@section('body')
    <p class="mt-4"><span class="mif-chevron-thin-left"></span> 
        <a href="{{url('/products')}}">Regresar a todos los Productos</a>
    </p>
    <h1 class="text-center main-title">Modificar producto</h1>
    <form method="POST" id="form-container" enctype="multipart/form-data" class="grid"
     action="{{ url('/products/edit') }}">
        @csrf
        <input type="hidden" id="id" name="id" value="{{$product->id}}">
        <div class="row">
            <label for="code" class="cell-lg-6 cell-xl-4 cell-12 label">Codigo del Producto:</label>
            <div class="cell-lg-6 cell-12">
                <input id="code" type="text" class="@error('code') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="code" value="{{ $product->code }}" >

                @error('code')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <label for="name" class="cell-lg-6 cell-xl-4 cell-12 label">Nombre:</label>
            <div class="cell-lg-6 cell-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="name" value="{{ $product->name }}" >

                @error('name')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <label for="price" class="cell-lg-6 cell-xl-4 cell-12 label">Precio:</label>
            <div class="cell-lg-6 cell-12">
                <input id="price" type="number" step="any" 
                 class="@error('price') invalid @enderror"
                 data-clear-button="false"
                 data-role="input" name="price" value="{{ $product->price }}" >

                @error('price')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <label for="description" class="cell-lg-6 cell-xl-4 cell-12 label">Descripción:</label>
            <div class="cell-lg-6 cell-12">
                <textarea id="description" class="@error('description') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>"
                 data-role="textarea" name="description">{{ $product->description }}</textarea>

                @error('description')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <label for="photo" class="cell-lg-6 cell-xl-4 cell-12 label">Subir Imagen:</label>
            <div class="cell-lg-6 cell-12 my-img">
                <input type="hidden" id="image-url" value="{{asset('img/products/'.$product->photo)}}">
                <input type="hidden" name="image" value="{{ $product->photo }}">
                <input id="photo" type="file" data-on-file-create="FileEditInit"
                 data-role="file" data-mode="drop" accept="image/*" data-on-select="FileSelect"
                 class="@error('photo') invalid @enderror" name="photo">

                @error('photo')
                    <span class="invalid_feedback" >
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-0">
            <div class="cell-md-8 offset-md-4">
                <button type="submit" class="button button-submit">
                    Modificar
                </button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{asset('js/product.js')}}"></script>
@endsection