@extends('layouts.app')

@section('content')
    <div class="title"><h5>New Message</h5></div>

    @if ($errors->any())
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($errors->all() as $error)
                <div class="nNote nFailure hideit">
                    <p><strong>Error: </strong>{{$error}}</p>
                </div>
            @endforeach
        </div>
    @endif

    @if (isset($success))
        <div class="wrapper" style="max-width: 600px;">
            <div class="nNote nSuccess hideit">
                <p><strong>Success: </strong>{{$success}}</p>
            </div>
        </div>
    @endif

    <!-- Form begins -->
    <form action="{{ url(('/messages/new')) }}@if(isset($username))/{{$username}}@endif"  method="post" class="mainForm">
        {{ csrf_field() }}
        <fieldset>
            <div class="widget first">
                <div class="head"><h5 class="iPencil">Message</h5></div>
                <div class="rowElem"><label><center>Title:</center></label><div style="width: 80%;" class="formRight"><input type="text" maxlength="64" placeholder="What's the title of your message?" name="title"/></div></div>
                <div class="rowElem"><label><center>Recipient:</center></label><div style="width: 80%;" class="formRight"><input value="@if(isset($username)){{ $username }}@endif" type="text" maxlength="16" placeholder="To whom you're gonna send it?" name="recipient"/></div></div>
                <div class="rowElem"><label><center>Text:</center></label><div style="width: 80%;" class="formRight"><textarea rows="8" cols="" class="auto" name="content"></textarea></div></div>
                <div class="submitForm"><input type="submit" value="Send Message" class="greyishBtn" /></div>
            </div>
        </fieldset>
    </form>
@endsection