@extends('layouts.app')

@section('content')
    <div class="title"><h5>Admin Panel</h5></div>

    @if ($errors->any())
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($errors->all() as $error)
                <div class="nNote nFailure hideit">
                    <p><strong>Error: </strong>{{$error}}</p>
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

    @if (Session::has('success'))
        <div class="wrapper" style="max-width: 600px;">
            <div class="nNote nSuccess hideit">
                <p><strong>Success: </strong>{{Session::get('success')}}</p>
            </div>
        </div>
    @endif

    @if(isset($read))
    <div class="widget">
        <div class="head"><h5 class="iCreate">Message</h5></div>
        <div class="body">
            {{$read['message']}}
            <br><br>
            {{$read['name']}} - {{$read['email']}}
        </div>
    </div>
    @endif

    <!-- Headings -->
    <div class="widget">
        <div class="head"><h5 class="iFrames">Contact Messages</h5></div>
        <table class="tableStatic" width="100%" cellspacing="0" cellpadding="0" style="text-align: center;">
            <thead>
            <tr>
                <td width="5%">ID</td>
                <td width="20%">Name</td>
                <td width="40%">Email</td>
                <td width="25%">Date</td>
                <td width="10%">Action</td>
            </tr>
            </thead>
            <tbody>
            @if(!empty($msg))
                @foreach($msg as $item)
                    <tr @if($item['read'] == false) style="font-weight: bold;"@endif>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>{{$item['created_at']}}</td>
                        <td>
                            <a href="{{url('/admin/contact/delete/'.$item['id'])}}"><img src="{{url('/images/icons/color/cross.png')}}" class="topDir" value="top direction" original-title="Delete" /></a>
                            <a href="{{url('/admin/contact/read/'.$item['id'])}}"><img src="{{url('/images/icons/color/binocular.png')}}" class="topDir" value="top direction" original-title="Read" /></a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td></td>
                    <td></td>
                    <td>No messages.</td>
                    <td></td>
                    <td>
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection