@extends('layouts.app')

@section('content')
    <div class="title"><h5>Outbox</h5></div>

    @if (isset($notify))
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($notify as $item)
                <div class="nNote {{$item['type']}} hideit">
                    <p><strong>{{$item['title']}} </strong>{{$item['text']}}</p>
                </div>
            @endforeach
        </div>
    @endif

    @if (Session::has('error'))
        <div class="wrapper" style="max-width: 600px;">
            <div class="nNote nFailure hideit">
                <p><strong>Success: </strong>{{Session::get('error')}}</p>
            </div>
        </div>
    @endif

    <!-- Dynamic table -->
    <div class="table">
        <div class="head"><h5 class="iFrames">Messages</h5></div>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
            <tr>
                <th>To</th>
                <th>Title</th>
                <th style="max-width: 25px;">Date</th>
                <th>Options</th>
            </tr>
            </thead>

            <tbody>
            @foreach($messages as $message)
            <tr class="gradeA">
                <td class="center"><a href="#">{{ $message->to }}</a></td>
                <td class="center"><a href="{{url('/messages/outbox/read/'.$message->id)}}">{{ $message->title }}</a></td>
                <td class="center">{{ $message->date }}</td>
                <td class="center">
                    <a href="{{url('/messages/outbox/delete/'.$message->id)}}"><img src="{{ url('images/icons/color/cross.png') }}" class="topDir" value="top direction" original-title="Delete"/></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection