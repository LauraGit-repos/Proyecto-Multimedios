<!-- Extends from template -->
@extends('layout')

<!-- Title section -->
@section('title','Inicio')

<!-- Body section -->
@section('body')

    <form method="POST" id="form-contact" enctype="multipart/form-data" class="grid container ">
     <h3 class="title_contact">Contacto</h3>
     <p class="contact_paragraph">Puede realizar consultas, cotizaciones, comentarios.</p>
    <br>
    <div class="row flex-justify-center">
     <label for="name" class="  cell-xxl-1 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 label flex-align-self-center">Nombre:</label>  
       <div class=" cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 ">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="name" value="{{ old('name') }}" >   
        </div>   
    </div>
    
    
    <div class="row flex-justify-center">
    
     <label for="name" class="cell-xxl-1 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 label flex-align-self-center">Apellido:</label>  
       <div class="cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="lastname" value="{{ old('lastname') }}" >
       </div>      
     
    </div>
    

    <div class="row flex-justify-center">
    
    <label for="name" class="cell-xxl-1 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 label flex-align-self-center">Telefono:</label>  
      <div class="cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="phone" value="{{ old('phone') }}" >
       </div>
    </div>

    <div class="row flex-justify-center">
     <label for="name" class=" cell-xxl-1 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 label flex-align-self-center">Correo:</label>  
       <div class="cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12">
              <input idtextarea="email" type="email"-
                data-clear-button-icon="<span class='mif-cancel'></span>" data-role="input" name="email" >
       </div>
    </div>

    <div class="row flex-justify-center" id="textarea" >
    <label for="name" class=" cell-xxl-1 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 label flex-align-self-center">Consulta:</label>
      <div  class="cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 ">
        <textarea  data-role="textarea"
           data-append="<span class='mif-leanpub'></span>"></textarea>
      </div> 
    </div>
    <br>
    <div class="row flex-justify-center " id="sendContact">
        <button type="submit" class="button button-submit cell-xxl-2 cell-xl-4 cell-lg-6 "> Enviar </button>
    </div>
    <br>

    <div class="row flex-justify-center " id="sendContact">
     <label for="name" class=" information row mif-phone mif-1x" >   20781381    /</label>  
     <label for="name" class=" information row " >   Dirección: Esparza, Puntareas, Costa Rica</label>
    </div>

  
@endsection