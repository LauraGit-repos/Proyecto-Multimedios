@extends('layout')

@section('title','Login')


@section('body')

    <h1 class="text-center main-title">Inicio de Sessión</h1>
    <form method="POST" id="login-container" class="grid" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <label for="identity" class="cell-lg-6 cell-xl-4 cell-12 label">Usuario o Email:</label>

            <div class="cell-lg-6 cell-12">
                <input id="identity" type="text" data-prepend="<span class='mif-user'></span>"
                 class="@error('identity') invalid @enderror" data-role="input"
                  name="identity" value="{{ old('identity') }}" required autocomplete="identity"
                  data-clear-button-icon="<span class='mif-cancel'></span>" autofocus>

                @error('identity')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="cell-lg-6 cell-xl-4 cell-12 label">Contraseña:</label>

            <div class="cell-lg-6 cell-12">
                <input id="password" type="password" data-role="input"
                 data-prepend="<span class='mif-lock'></span>" data-clear-button="false"
                 class="@error('password') invalid @enderror"
                 name="password" autocomplete="current-password">

                @error('password')
                    <span class="invalid_feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="cell-md-6 offset-md-4">
                <div class="form-check">
                    <input data-caption="Recordarme" type="checkbox" data-role="checkbox"
                     name="remember" id="remember" data-cls-check="fg-cyan" {{ old('remember') ? 'checked' : '' }}>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="cell-md-8 offset-md-4">
                <button type="submit" class="button button-submit">
                    Ingresar
                </button>
            </div>
        </div>
    </form>
@endsection
