<!-- Extends from template -->
@extends('layout')

<!-- Title section -->
@section('title','Inicio')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/index/index.css')}}">
@endsection

<!-- Body section -->
@section('body')
    <div id="imagenes">
        <img src="{{asset('img/girasol.jpg')}}" alt="girasol">
        <img src="{{asset('img/boda.jpg')}}" alt="boda">
    </div>
@endsection