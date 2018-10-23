@extends('layouts.app')

@section('content')
    <!-- Register form area -->
    @if ($errors->any())
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($errors->all() as $error)
                <div class="nNote nFailure hideit">
                    <p><strong>Błąd: </strong>{{$error}}</p>
                </div>
            @endforeach
        </div>
    @endif

    <div class="loginWrapper">

        <div class="loginLogo"><img src="images/logo.png" alt="" /></div>

        <div class="loginPanel">


            <div class="head"><h5 class="iUser">Rejestracja</h5></div>
            <form action="{{ route('register') }}" method="POST" id="valid" class="mainForm">
                <fieldset>
                    {{ csrf_field() }}
                    <div class="loginRow noborder">
                        <label for="req1">Login:</label>
                        <div class="loginInput"><input type="text" name="username" class="validate[required]" value="{{ old('username') }}" id="req1" /></div>
                    </div>

                    <div class="loginRow">
                        <label for="req2">Email:</label>
                        <div class="loginInput"><input type="text" name="email" class="validate[required]" value="{{ old('email') }}" id="req2" /></div>
                    </div>

                    <div class="loginRow">
                        <label for="req2">Hasło:</label>
                        <div class="loginInput"><input type="password" name="password" class="validate[required]" id="req2" /></div>
                    </div>

                    <div class="loginRow">
                        <label for="req2">Powtórz hasło:</label>
                        <div class="loginInput"><input type="password" name="password_confirmation" class="validate[required]" id="req2" /></div>
                    </div>

                    <div class="loginRow">
                        <div class="submitForm"><input type="submit" value="Zarejestruj" class="greenBtn" /></div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
