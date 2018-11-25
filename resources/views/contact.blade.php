@extends('layouts.app')

@section('content')
    <div class="title"><h5>Contact</h5></div>

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

    {!! NoCaptcha::renderJs() !!}
    <form action="{{url('/contact')}}" method="post" class="mainForm">
        <!-- Input text fields -->
        <fieldset>
            {{ csrf_field() }}
            <div class="widget first">
                <div class="head"><h5 class="iList">Contact Form</h5></div>

                <div class="rowElem noborder"><label>Your name:</label><div class="formRight"><input type="text" name="contact_name"></div></div>
                <div class="rowElem noborder"><label>Your Email:</label><div class="formRight"><input type="text" name="contact_email"></div></div>
                <div class="rowElem"><label>Your Message:</label><div class="formRight"><textarea rows="8" cols="" class="auto" name="contact_message" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 137px;"></textarea></div></div>
                <div class="rowElem noborder"><div class="formRight">{!! NoCaptcha::display() !!}</div></div>

                <div class="rowElem noborder"><div class="submitForm"><input type="submit" value="Send Message" class="greenBtn"></div></div>

            </div>
        </fieldset>
    </form>
@endsection