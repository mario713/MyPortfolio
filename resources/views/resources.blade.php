@extends('layouts.app')

@section('content')
    <div class="title"><h5>Resources</h5></div>

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

    <!-- Dynamic table -->
    <div class="table">
        <div class="head"><h5 class="iFrames">List</h5></div>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="text-align: center;">
            <thead>
            <tr>
                <th style="width: 10%;">ID</th>
                <th style="width: 20%;">File Name</th>
                <th style="width: 40%;">Description</th>
                <th style="width: 15%;">Date Added</th>
                <th style="width: 15%;">Option</th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($files))
                @foreach($files as $file)
                    <tr class="gradeA">
                        <td>{{$file->id}}</td>
                        <td>{{$file->title}}</td>
                        <td>{{$file->description}}</td>
                        <td>{{$file->created_at}}</td>
                        <td>
                            @role('admin')
                            <a href="{{url('/resources/delete/'.$file->id)}}"><img src="{{url('/images/icons/color/cross.png')}}" class="topDir" value="top direction" original-title="Delete"/></a>
                            @endrole
                            <a href="{{url('/resources/download/'.$file->id)}}"><img src="{{url('/images/icons/color/disk-return-black.png')}}" class="topDir" value="top direction" original-title="Download"/></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection