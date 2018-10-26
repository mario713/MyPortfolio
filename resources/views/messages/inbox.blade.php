@extends('layouts.app')

@section('content')
    <div class="title"><h5>Skrzynka Odbiorcza</h5></div>

    @if (isset($notify))
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($notify as $item)
                <div class="nNote {{$item['type']}} hideit">
                    <p><strong>{{$item['title']}} </strong>{{$item['text']}}</p>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Dynamic table -->
    <div class="table">
        <div class="head"><h5 class="iFrames">Messages</h5></div>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
            <tr>
                <th>From</th>
                <th>Title</th>
                <th style="max-width: 25px;">Date</th>
                <th>Options</th>
            </tr>
            </thead>

            <tbody>
            @foreach($messages as $message)
            <tr class="gradeA">
                <td class="center"><a href="#">{{ $message->from }}</a></td>
                <td class="center"><a href="#">{{ $message->title }}</a></td>
                <td class="center">{{ $message->date }}</td>
                <td class="center">

                    <a href="{{ url('/messages/inbox/delete/'.$message->id) }}"><img src="{{ url('images/icons/color/cross.png') }}" class="topDir" value="top direction" original-title="Usuń Wiadomość"/></a>
                    <a href="{{ url('/messages/new/'.$message->from) }}"><img src="{{ url('images/icons/color/arrow-curve-180.png') }}" class="topDir" value="top direction" original-title="Odpowiedz Na Wiadomość"/></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection