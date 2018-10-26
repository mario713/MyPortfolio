@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($errors->all() as $error)
                <div class="nNote nFailure hideit">
                    <p><strong>Error: </strong>{{$error}}</p>
                </div>
            @endforeach
        </div>
    @endif

    @if(isset($success))
        <div class="wrapper" style="max-width: 600px;">
                <div class="nNote nSuccess hideit">
                    <p><strong>Success: </strong>{{ $success }}</p>
                </div>
        </div>
    @endif

    <div class="title"><h5>Account Settings</h5></div>

    <!-- Headings -->
    <div class="widget first">
        <div class="head"><h5 class="iLocked2">Password Change</h5></div>

        <form action="{{ url('/settings/passchange') }}" method="post" class="mainForm">
            <fieldset>
                {{ csrf_field() }}
                <div class="rowElem"><label>Your Password:</label><div class="formRight"><input type="password" name="old_pass"></div></div>
                <div class="rowElem"><label>New Password:</label><div class="formRight"><input type="password" name="new_pass"></div></div>
                <div class="rowElem"><label>Confirm New Password:</label><div class="formRight"><input type="password" name="confirm_new_pass"></div></div>
                <div class="submitForm"><input type="submit" value="Zmień Hasło" class="basicBtn" /></div>
            </fieldset>
        </form>
    </div>
@endsection