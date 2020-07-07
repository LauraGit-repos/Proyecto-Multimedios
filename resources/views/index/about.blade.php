<!-- Extends from template -->
@extends('layout')

<!-- Title section -->
@section('title','Inicio')


<!-- Body section -->
@section('body')
<div class="grid">
    <div class="row">
        <div class="cell-lg-2 cell-sm-1"></div>
        <div class="cell-sm-5 cell-lg-3">
            <p class="sub-title">Sobre Nosotros:</p>
        </div>
        <div class="cell-sm-6 cell-lg-3">
            <p class="indent-letter">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati laboriosam repellat ab omnis voluptates nesciunt sunt reiciendis modi eos cum, qui sequi voluptatibus expedita quas voluptate laudantium esse doloremque?
            </p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="cell-lg-2 cell-sm-1"></div>
        <div class="cell-sm-5 cell-lg-3">
            <p class="sub-title">Ubicación:</p>
        </div>
        <div class="cell-sm-6 cell-lg-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d982.3367713794306!2d-84.6738643!3d9.9881613!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa036deaad956b1%3A0xed90b79f3414fefd!2sBarrio%20El%20Moj%C3%B3n%2C%20Provincia%20de%20Puntarenas%2C%20Esp%C3%ADritu%20Santo!5e0!3m2!1ses-419!2scr!4v1593326621652!5m2!1ses-419!2scr" 
            height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="map-google"></iframe>
        </div>
    </div>
</div>
@endsection