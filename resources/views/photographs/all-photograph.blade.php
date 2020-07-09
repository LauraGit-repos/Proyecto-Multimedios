@extends('layout')

@section('title','Agregar Fotografías')


@section('body')
<form method="POST" id="form-contact" enctype="multipart/form-data" class="grid container ">
     <h3 class="title_contact">Todas las fotografias</h3>
    
    <br>
    <div class="row flex-justify-around"> 
     
       <div class=" cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 ">
       <img  src="{{asset('img/pajaro.jpg')}}" alt="pajaro">
       <div class="row flex-justify-center">
       <a class=" cell-xxl-5 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 " href="">Cambiar</a>
       <button  type="submit"class="button button-submit cell-xxl-5 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 "> Eliminar </button>
    
       </div>   
        </div>   

        <div class=" cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 ">
        <img src="{{asset('img/techo.jpg')}}" alt="techo">
        <div class="row flex-justify-center">
       <a class=" cell-xxl-5 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 " href="">Cambiar</a>
       <button  type="submit"class="button button-submit cell-xxl-5 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 "> Eliminar </button>
    
       </div>   
        </div>   
    </div>
    <div class="row flex-justify-around">
     
       <div class=" cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 ">
               
       <img src="{{asset('img/muelle.jpg')}}" alt="muelle"> 
       <div class="row flex-justify-center">
       <a class=" cell-xxl-5 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 " href="">Cambiar</a>
       <button  type="submit"class="button button-submit cell-xxl-5 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 "> Eliminar </button>
    
       </div>   
        </div>   
        <div class=" cell-xxl-4 cell-xl-4 cell-lg-6 cell-md-9 cell-sm-12 ">
        <img src="{{asset('img/muellero.jpg')}}" alt="muellero">
        <div class="row flex-justify-center">
       <a class=" cell-xxl-5 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 " href="">Cambiar</a>
       <button  type="submit"class="button button-submit cell-xxl-5 cell-xl-5 cell-lg-6 cell-md-9 cell-sm-12 "> Eliminar </button>
    
       </div>   
        </div>   
    </div>
    
    
 
  
@endsection