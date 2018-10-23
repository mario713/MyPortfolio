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

    <!-- Login form area -->
    <div class="loginWrapper">
        <div class="loginLogo"><img src="images/logo.png" alt="" /></div>
        <div class="loginPanel">
            <div class="head"><h5 class="iUser">Logowanie</h5></div>
            <form action="{{url('/login')}}" id="valid" class="mainForm" method="post">
                <fieldset>
                    {{ csrf_field() }}
                    <div class="loginRow noborder">
                        <label for="req1">Login:</label>
                        <div class="loginInput"><input type="text" name="username" class="validate[required]" id="req1" /></div>
                    </div>

                    <div class="loginRow">
                        <label for="req2">Hasło:</label>
                        <div class="loginInput"><input type="password" name="password" class="validate[required]" id="req2" /></div>
                    </div>

                    <div class="loginRow">
                        <div class="rememberMe"><input type="checkbox" id="check2" name="chbox" /><label for="check2">Zapamiętaj mnie</label></div>
                        <div class="submitForm"><input type="submit" value="Zaloguj" class="greenBtn" /></div>
                    </div>

                </fieldset>
            </form>
        </div>
        </center><br><a href="{{ url('/password/reset') }}" style="float: right;">Zapomniałeś hasła?</a>
    </div>
@endsection
