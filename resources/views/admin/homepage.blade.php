@extends('layouts.app')

@section('content')
    <div class="title"><h5>Home Page</h5></div>

    @if ($errors->any())
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($errors->all() as $error)
                <div class="nNote nFailure hideit">
                    <p><strong>Error: </strong>{{$error}}</p>
                </div>
            @endforeach
        </div>
    @endif

    <form action="{{url('/admin/news/add')}}" method="post" class="mainForm" id="news_form">
    {{ csrf_field() }}

    <!-- WYSIWYG editor -->
    <div class="widget">
        <textarea id="editor" rows="10" cols="16" style="float: left;">Write your news here...</textarea>
    </div>


    <div class="widget first" style="border: 1px solid #e7e7e7;">
        <input type="hidden" name="news_content" value="" id="content"/>

        <div class="rowElem">
            <div class="submitForm">
                <input type="button" value="Preview" class="basicBtn" onClick="news_form.action = '{{url('/admin/news/preview')}}'; news_content.value = editor.value; news_form.submit();"/>
                <input type="submit" value="Save" class="greenBtn" onClick="news_form.action = '{{url('/admin/news/add')}}'; news_content.value = editor.value; news_form.submit();"/>
            </div>
        </div>
    </div>

    </form>
@endsection