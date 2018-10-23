@extends('layouts.app')

@section('content')
@section('content')
    @if (session('status'))
        <div class="wrapper" style="max-width: 600px;">
            <div class="nNote nSuccess hideit">
                <p><strong>Success: </strong>{{ session('status') }}</p>
            </div>
        </div>
    @endif
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
        <div class="loginLogo"><img src="images/logo.png" alt="" /></div>
        <div class="loginPanel">
            <div class="head"><h5 class="iUser">Przypomnienie Hasła</h5></div>
            <form action="{{ route('password.email') }}" id="valid" class="mainForm" method="post">
                <fieldset>
                    {{ csrf_field() }}

                    <div class="loginRow noborder">
                        <label for="req1">Email:</label>
                        <div class="loginInput"><input type="text" name="email" class="validate[required]" value="{{ old('email') }}" id="req1" /></div>
                    </div>

                    <div class="loginRow">
                        <div class="submitForm"><input type="submit" value="Przypomnij" class="basicBtn" /></div>
                    </div>

                    <!--
                    <div class="loginRow" style="clear: both; border: 0px;">
                        <div class="submitForm"><input type="submit" value="Przypomnij hasło" class="basicBtn" /></div>
                    </div>
                    -->
                </fieldset>
            </form>
        </div>
    </div>
@endsection
