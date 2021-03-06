@extends('layouts.app')

@section('content')
    <div class="title"><h5>News</h5></div>

    @if ($errors->any())
        <div class="wrapper" style="max-width: 600px;">
            @foreach ($errors->all() as $error)
                <div class="nNote nFailure hideit">
                    <p><strong>Error: </strong>{{$error}}</p>
                </div>
            @endforeach
        </div>
    @endif

    <div class="widget first" style="border: 1px solid #e7e7e7;">
        <form action="{{url('/admin/news/add')}}" method="post" class="mainForm" id="news_form">
            {{ csrf_field() }}
            <div class="rowElem noborder">
                <label>Title:</label>
                <div class="formRight">
                    <input id="test" type="text" name="news_title"/>
                </div>


            </div>

            <div class="rowElem">
                <label>Category:</label>
                <div class="formRight">
                    <select data-placeholder="Choose news category..." name="cat_id" class="select-liquid" tabindex="2" style="min-width: 150px;">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <input type="hidden" name="news_content" value="" id="content"/>

            <div class="rowElem">
                <div class="submitForm">
                    <input type="button" value="Preview" class="basicBtn" onClick="news_form.action = '{{url('/admin/news/preview')}}'; news_content.value = editor.value; news_form.submit();"/>
                    <input type="submit" value="Add News" class="greenBtn" onClick="news_form.action = '{{url('/admin/news/add')}}'; news_content.value = editor.value; news_form.submit();"/>
                </div>
            </div>
    </div>
    <!-- WYSIWYG editor -->

    <div class="widget">
        <textarea id="editor" rows="10" cols="16" style="float: left;">Write your news here...</textarea>
    </div>
    </form>
@endsection