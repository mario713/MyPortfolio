@extends('layouts.app')

@section('content')
    <div class="title"><h5>News</h5></div>

    <form action="" class="mainForm">
        <!-- WYSIWYG editor -->
        <fieldset>
            <div class="widget">
                <div class="head"><h5 class="iPencil">WYSIWYG editor</h5></div>
                <textarea id="editor" name="editor" rows="10" cols="16" style="float: left;">Some cool stuff here</textarea>
            </div>
        </fieldset>
    </form>
    </div>
@endsection