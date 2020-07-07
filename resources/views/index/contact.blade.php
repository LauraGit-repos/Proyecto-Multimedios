<!-- Extends from template -->
@extends('layout')

<!-- Title section -->
@section('title','Inicio')

<!-- Body section -->
@section('body')
<h3 class="title_contact">Contacto</h3>
   <p class="contact_paragraph">Puede realizar consultas, cotizaciones, comentarios.</p>
    <br>
    <form method="POST" id="form-contact" enctype="multipart/form-data" class="grid">
    <div class="row">
     <label for="name" class="cell-lg-2 cell-xl-2 cell-2 label">Nombre:</label>  
       <div class=" cell-lg-4 cell-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="name" value="{{ old('name') }}" >   
        </div>   
    </div>
    
    
    <div class="row">
    
     <label for="name" class="cell-lg-2 cell-xl-2 cell-2 label">Apellido:</label>  
       <div class="cell-lg-4 cell-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="lastname" value="{{ old('lastname') }}" >
       </div>      
       <label for="name" class=" information cell"> Correo:  photoStudio@gmail.com</label>    
    </div>
    

    <div class="row">
     <label for="name" class="cell-lg-2 cell-xl-2 cell-2 label">Telefono:</label>  
       <div class="cell-lg-4 cell-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="phone" value="{{ old('phone') }}" >
       </div>
       <label for="name" class=" information row mif-phone mif-1x" >   20781381</label>      
    </div>

    <div class="row">
     <label for="name" class="cell-lg-2 cell-xl-2 cell-2 label">Correo:</label>  
       <div class="cell-lg-4 cell-12">
                <input idtextarea="email" type="email"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="email" >
       </div>
       <label for="name" class=" information row " >   Dirección: Esparza, Puntareas, Costa Rica</label>   
    </div>

    <div class="row" id="textarea" >
         <textarea data-role="textarea" data-append="<span class='mif-leanpub'></span>"></textarea>
    </div>
    <br>
    <div class="row " id="sendContact">
        <button type="submit" class="button button-submit"> Enviar </button>
    </div>
  
    
@endsection