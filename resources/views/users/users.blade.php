@extends('layout')

@section('title','Usuarios')

@section('body')

    <h1 class="text-center main-title">Usuarios</h1>
    <h3 class="text-center mb-5">Agregar</h3>
    <form method="POST" id="form-container" class="grid" action="#">
        @csrf
        <div class="row">
            <label for="code" class="cell-lg-6 cell-xl-4 cell-12 label">Nombre:</label>
            <div class="cell-lg-6 cell-12">
                <input id="code" type="text"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="code" >
            </div>
        </div>
        <div class="row">
            <label for="name" class="cell-lg-6 cell-xl-4 cell-12 label">Correo:</label>
            <div class="cell-lg-6 cell-12">
                <input id="name" type="email"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-role="input" name="name" >

            </div>
        </div>
        <div class="row">
            <label for="price" class="cell-lg-6 cell-xl-4 cell-12 label">IDUsuario:</label>
            <div class="cell-lg-6 cell-12">
                <input id="price" type="text"
                 data-clear-button-icon="<span class='mif-cancel'></span>"
                 data-role="input" name="price" >

            </div>
        </div>
        <div class="row">
            <label for="password" class="cell-lg-6 cell-xl-4 cell-12 label">Contraseña:</label>
            <div class="cell-lg-6 cell-12">
                <input id="password" type="password"
                 data-clear-button="false"
                 data-role="input" name="password" >

            </div>
        </div>
        <div class="row">
            <label for="passwordr" class="cell-lg-6 cell-xl-4 cell-12 label">Repetir Contraseña:</label>
            <div class="cell-lg-6 cell-12">
                <input id="passwordr" type="password"
                 data-clear-button="false"
                 data-role="input" name="passwordr" >

            </div>
        </div>
        <div class="row mb-0">
            <div class="cell-md-8 offset-md-4">
                <button type="button" class="button button-submit">
                    Agregar
                </button>
            </div>
        </div>
    </form>
    <hr>
    <div class="row">
        <div class="cell-lg-8 cell-md-7 cell-sm-6 my-search-wrapper"></div>
        <div class="cell-lg-4 cell-md-5 cell-sm-6 my-rows-wrapper"></div>
    </div>
    <table class="table compact table-border cell-border" id="users-table"
        data-role="table" data-rows="10"
        data-rows-steps="-1, 5, 10, 20, 50"
        data-check="false" data-rownum="true"
        data-table-rows-count-title="Mostrar resultados:"
        data-all-records-title="Todos" data-check-name="chb"
        data-table-search-title="Buscar:"
        data-table-info-title="<span class='fg-amber'>Resultados del $1 al $2, total: $3 </span>"
        data-pagination-prev-title="<span class='fg-black'><span class='mif-chevron-left'></span> Ant. </span>"
        data-pagination-next-title="<span class='fg-black'> Sig. <span class='mif-chevron-right'></span></span>"
        data-search-wrapper=".my-search-wrapper"
        data-rows-wrapper=".my-rows-wrapper"
        data-check-style="2"
        data-show-search="true"
        data-search-fields="name,email,phone"
        data-horizontal-scroll="true"
        data-source="{{url('users/getUsers')}}"
    >
    </table>
@endsection
