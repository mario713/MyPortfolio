@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($errors->all() as $error)
                <div class="nNote nFailure hideit">
                    <p><strong>Błąd: </strong>{{$error}}</p>
                </div>
            @endforeach
        </div>
    @endif
    <!-- Password Reset form area -->
    <div class="loginWrapper">
        <div class="loginLogo"><img src="{{url('images/logo.png')}}" alt="" /></div>
        <div class="loginPanel">
            <div class="head"><h5 class="iUser">Reset Hasła</h5></div>
            <form action="{{ route('password.request') }}" id="valid" class="mainForm" method="post">
                <fieldset>
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="loginRow noborder">
                        <label for="req1">Email:</label>
                        <div class="loginInput"><input type="text" name="email" class="validate[required]" value="{{ old('email') }}" id="req1" /></div>
                    </div>

                    <div class="loginRow noborder">
                        <label for="req1">Nowe Hasło:</label>
                        <div class="loginInput"><input type="password" name="password" class="validate[required]" id="req1" /></div>
                    </div>

                    <div class="loginRow noborder">
                        <label for="req1">Powtórz Hasło:</label>
                        <div class="loginInput"><input type="password" name="password_confirmation" class="validate[required]" id="req1" /></div>
                    </div>

                    <div class="loginRow">
                        <div class="submitForm"><input type="submit" value="Ustaw Nowe Hasło" class="basicBtn" /></div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
@endsection
