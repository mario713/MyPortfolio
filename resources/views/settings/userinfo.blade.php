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
        <div class="head"><h5 class="iInfo">Info</h5></div>

        <form action="{{ url('/settings') }}" method="post" class="mainForm">
            {{ csrf_field() }}
            <fieldset>
                <div class="rowElem"><label>First Name:</label><div class="formRight"><input type="text" name="first_name" @if (isset(Auth::user()->first_name)) value="{{ Auth::user()->first_name }}" @endif></div></div>
                <div class="rowElem"><label>Last Name:</label><div class="formRight"><input type="text" name="last_name" @if (isset(Auth::user()->last_name)) value="{{ Auth::user()->last_name }}" @endif></div></div>
                <div class="rowElem">
                    <label>Hide Name: </label>
                    <div class="formRight">
                        <span class="checked"><input type="checkbox" id="check1" name="hide_name" @if (Auth::user()->show_name == false) checked="checked" @endif></span>
                    </div>
                </div>
                <div class="rowElem">
                    <label>Hide Email: </label>
                    <div class="formRight">
                        <span class="checked"><input type="checkbox" id="check1" name="hide_email" @if (Auth::user()->show_email == false) checked="checked" @endif></span>
                    </div>
                </div>
                <div class="submitForm"><input type="submit" value="Aktualizuj" class="basicBtn" /></div>
            </fieldset>
        </form>
    </div>
@endsection