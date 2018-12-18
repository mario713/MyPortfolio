@extends('layouts.app')

@section('content')
    <div class="title"><h5>Message</h5></div>

    @if ($errors->any())
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($errors->all() as $error)
                <div class="nNote nFailure hideit">
                    <p><strong>Error: </strong>{{$error}}</p>
                </div>
            @endforeach
        </div>
    @endif

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Info</h5></div>
        <div class="body">
            <div class="rowElem noborder" style="font-size: 15px;"><b>Title: </b>{{$message->title}}</div>
            <div class="rowElem noborder" style="font-size: 15px;"><b>From: </b>{{$message->from}}</div>
            <div class="rowElem noborder" style="font-size: 15px;"><b>Date: </b>{{$message->date}}</div>
            <div class="rowElem noborder" style="font-size: 15px;"><b>Type: </b>{{$message->type}}</div>
        </div>
    </div>

    <!-- Headings -->
    <div class="widget">
        <div class="head"><h5 class="iCreate">Message</h5></div>
        <div class="body">
            <p style="font-size: 15px; margin: 15px;">{{$message->content}}</p>
            <div class="rowElem noborder"><div style="float: right;"><input type="button" class="blueBtn" value="Reply" onClick="window.location.href='{{url('/messages/new/'.$message->from)}}'"/></div></div>
        </div>
    </div>
@endsection