@extends('layout')

@section('title','Registro')

@section('body')
    <h1 class="text-center main-title">Registro de usuario</h1>
    <form method="POST" id="login-container" class="grid" action="{{ route('register') }}">
        @csrf

        <div class="row">
            <label for="name" class="cell-lg-6 cell-xl-4 cell-12 label">Usuario:</label>

            <div class="cell-lg-6 cell-12">
                <input id="name" type="text" class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-prepend="<span class='mif-user'></span>" data-role="input"
                 name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <label for="email" class="cell-lg-6 cell-xl-4 cell-12 label">Correo:</label>

            <div class="cell-lg-6 cell-12">
                <input id="email" type="email" 
                 class="@error('name') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" 
                 data-prepend="<span class='mif-mail'></span>" data-role="input"
                 name="email" value="{{ old('email') }}" autocomplete="email">

                @error('email')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <label for="phone" class="cell-lg-6 cell-xl-4 cell-12 label">Teléfono:</label>

            <div class="cell-lg-6 cell-12">
                <input id="phone" type="text" class="@error('phone') invalid @enderror"
                 data-clear-button-icon="<span class='mif-cancel'></span>" placeholder="(506)"
                 data-prepend="<span class='mif-phone'></span>" data-role="input"
                 name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>

                @error('phone')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <label for="password" class="cell-lg-6 cell-xl-4 cell-12 label">Contraseña</label>

            <div class="cell-lg-6 cell-12">
                <input id="password" type="password"
                 data-role="input" data-clear-button="false"
                 data-prepend="<span class='mif-lock'></span>" 
                 class="@error('password') invalid @enderror"
                 name="password" autocomplete="new-password">

                @error('password')
                    <span class="invalid_feedback" >
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <label for="password-confirm" class="cell-lg-6 cell-xl-4 cell-12 label">Confirmar Contraseña:</label>

            <div class="cell-lg-6 cell-12">
                <input id="password-confirm" type="password"
                 data-role="input" data-clear-button="false"
                 data-prepend="<span class='mif-lock'></span>" 
                 class="@error('password') invalid @enderror"
                 name="password_confirmation" autocomplete="new-password">
            </div>
        </div>

        <div class="row">
            <div class="cell-md-6 offset-md-4">
                <div class="form-check">
                    <input data-caption="Acepto términos y condiciones" type="checkbox"
                     data-role="checkbox" name="acepto" required id="acepto"
                     data-cls-check="fg-cyan">
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="cell-md-8 offset-md-4">
                <button type="submit" class="button button-submit">
                    Registrarse
                </button>
            </div>
        </div>
    </form>

@endsection
