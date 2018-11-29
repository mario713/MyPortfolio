@extends('layouts.app')

@section('content')
    <div class="title"><h5>Panel Administracyjny</h5></div>

    @if ($errors->any())
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($errors->all() as $error)
                <div class="nNote nFailure hideit">
                    <p><strong>Error: </strong>{{$error}}</p>
                </div>
            @endforeach
        </div>
    @endif

    @if (Session::has('success'))
        <div class="wrapper" style="max-width: 600px;">
            <div class="nNote nSuccess hideit">
                <p><strong>Success: </strong>{{Session::get('success')}}</p>
            </div>
        </div>
    @endif

    <form action="{{url('/admin/resources')}}" method="post" class="mainForm" id="form" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="widget first">
        <div class="head"><h5 class="iUpload">File Upload</h5></div>

        <div class="rowElem"><label>Title:</label><div class="formRight"><input type="text" name="upload_title" value=""></div></div>
        <div class="rowElem"><label>Description:</label><div class="formRight"><textarea rows="8" cols="" class="auto" name="upload_description"></textarea></div></div>

        <div class="rowElem noborder">
            <label>File:</label>
            <div class="formRight">
                <input type="file" class="fileInput" id="fileInput" name="upload_file"/>
            </div>
        </div>
        <div class="rowElem"><div class="formRight"><input class="blueBtn" type="submit" value="Upload"></div></div></div>
    </div>
    </form>

@endsection