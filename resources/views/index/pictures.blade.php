<!-- Extends from template -->
@extends('layout')

<!-- Title section -->
@section('title','Fotografías')


<!-- Body section -->
@section('body')
<div class="grid no-gap">
    <div class="row no-gap">
        <div class="cell-md-12 cell-lg-6">
            <img src="{{asset('img/china.jpg')}}" alt="china">
        </div>
        <div class="cell-md-12 cell-lg-6">
            <img src="{{asset('img/laura.jpg')}}" alt="laura">
        </div>
    </div>
    <div class="row no-gap">
        <div class="cell">
            <img src="{{asset('img/abrigo.jpg')}}" alt="abrigo">
        </div>
    </div>
    <div class="row no-gap">
        <div class="cell-lg-8 cell-md-12">
            <img src="{{asset('img/bebe.jpg')}}" alt="bebe">
        </div>
        <div class="cell-lg-4 cell-md-12">
            <img src="{{asset('img/senora.jpg')}}" alt="senora">
        </div>
    </div>
</div>
@endsection