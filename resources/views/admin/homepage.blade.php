@extends('layouts.app')
@include('layouts.elements')

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

    @if(isset($preview))
        <div class="widget first">
            <div class="head"><h5 class="iCreate">{{$preview['title']}}</h5></div>
            <div class="body">
                {!!$preview['content']!!}
            </div>
        </div>
    @endif

    <form action="{{url('/admin/homepage')}}" method="post" class="mainForm" id="form">
    {{ csrf_field() }}
        <div class="widget">
            <div class="rowElem"><label>Title:</label><div class="formRight">
                    @if(isset($homepage) && !isset($preview))
                        <input type="text" name="title" @if(isset($homepage)) value="{{$homepage->title}}" @endif />
                    @elseif(isset($preview))
                        <input type="text" name="title" value="{{$preview['title']}}">
                    @else(!isset($homepage) && !isset($preview))
                        <input type="text" name="title" value="">
                    @endif

                </div></div>
        </div>


    <!-- WYSIWYG editor -->

    <div class="widget">
        <textarea id="editor" rows="10" cols="16" style="float: left;">
            @if(isset($homepage) && !isset($preview))
                {{$homepage->description}}
            @elseif(isset($preview))
                {{$preview['content']}}
            @else(!isset($homepage) && !isset($preview))
                Write your description here...
            @endif
        </textarea>
    </div>



        <fieldset>
            <div class="widget">

                <input type="hidden" name="content" value="" id="content"/>
                <input type="hidden" name="preview" value="0" id="preview"/>

                <div class="rowElem">

                    <div class="formRight" style="left: 90px;">
                        <input type="button" value="Preview" class="basicBtn" onClick="preview.value = '1'; content.value = editor.value; form.submit();"/>
                        <input type="button" value="Save" class="greenBtn" onClick="content.value = editor.value; form.submit();"/>
                    </div>
                </div>

            </div>
        </fieldset>

    </form>
@endsection