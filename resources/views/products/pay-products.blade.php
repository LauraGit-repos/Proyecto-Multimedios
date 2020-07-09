<!-- Extends from template -->
@extends('layout')

<!-- Title section -->
@section('title','Inicio')

<!-- Body section -->
@section('body')
 <form method="POST" id="form-contact" enctype="multipart/form-data" class="grid container ">
     

     <div class="row flex-justify-center ">
         <div class="cell mw-25 ">
            <h3 class="title_contact">Tarjeta de crédito</h3>
         </div>
         <div class="cell mw-25">
             <img src="{{asset('img/Visa-MasterCard.png')}}" alt="tarjetas">
        </div> 
    </div>
    <br>
    <div class="row flex-justify-center">
     <label for="name" class="cell-xxl-2 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 label ">Numero de tarjeta:</label>  
       <div class=" cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 ">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="name" value="{{ old('name') }}" >   
        </div>   
    </div>
    
    
    <div class="row flex-justify-center">
    
     <label for="name" class="cell-xxl-2 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 label ">Código:</label>  
       <div class="cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="lastname" value="{{ old('lastname') }}" >
       </div>      
     
    </div>
    <div class="row flex-justify-center">
    <label for="name" class="cell-xxl-2 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 label ">Fecha de vencimiento:</label>  
      <div class="cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12">
             <input data-role="datepicker" data-day="false">
      </div>  
    
   </div>
    

    <div class="row flex-justify-center">
    
    <label for="name" class="cell-xxl-2 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 label ">Cédula:</label>  
      <div class="cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="phone" value="{{ old('phone') }}" >
       </div>
    </div>

    <div class="row flex-justify-center">
     <label for="name" class="cell-xxl-2 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 label ">Total a Pagar:</label>  
       <div class="cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12">
              <input id="totalPagar" type="email" data-role="input" name="totalpagar"  readonly >
       </div>
    </div>
    <div class="row flex-justify-center">
            <div class="cell-md-6 offset-md-4">
                <div class="form-check">
                    <input data-caption="Acepto términos y condiciones" type="checkbox"
                     data-role="checkbox" name="acepto" required id="acepto"
                     data-cls-check="fg-cyan">
                </div>
            </div>
        </div>



@endsection
