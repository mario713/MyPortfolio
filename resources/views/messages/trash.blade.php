@extends('layouts.app')

@section('content')
    <div class="title"><h5>Trash</h5></div>

    <!-- Dynamic table -->
    <div class="table">
        <div class="head"><h5 class="iFrames">Messages</h5></div>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
            <tr>
                <th>From</th>
                <th>To</th>
                <th>Type</th>
                <th>Title</th>
                <th style="max-width: 25px;">Date</th>
                <th>Will be deleted at</th>
            </tr>
            </thead>

            <tbody>
            @foreach($messages as $message)
            <tr class="gradeA">
                <td class="center"><a href="#">{{ $message->from }}</a></td>
                <td class="center"><a href="#">{{ $message->to }}</a></td>
                <td class="center"><a href="#">{{ $message->type }}</a></td>
                <td class="center"><a href="#">{{ $message->title }}</a></td>
                <td class="center">{{ $message->date }}</td>
                <td class="center">
                    {{ $message->delete_at }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection