@extends('layout')

@section('title','Agregar Fotografías')


@section('body')
<h1 class="text-center main-title">Agregar Fotografías</h1>
    <form method="POST" id="form-container" enctype="multipart/form-data" class="grid"
     action="#">
        @csrf
        <div class="row">
            <label for="name" class="cell-lg-6 cell-xl-4 cell-12 label">Nombre:</label>
            <div class="cell-lg-6 cell-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="name" value="{{ old('name') }}" >

                @error('name')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <label for="photo" class="cell-lg-6 cell-xl-4 cell-12 label">Subir Imagen:</label>
            <div class="cell-lg-6 cell-12 my-img"> 
                <input id="photo" type="file" data-on-file-create="FileInit"
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
                    Agregar
                </button>
            </div>
        </div>
    </form>
     
@endsection
