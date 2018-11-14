@extends('layouts.app')

@section('content')
    <div class="title"><h5>About Me</h5></div>

    <!-- Headings -->
    <div class="widget first">
        <div class="head"><h5 class="iCreate">@if(isset($content)){{ $content->title }} @else Welcome @endif</h5></div>
        <div class="body">
            @if(isset($content))
                {!! $content->description !!}
            @endif
        </div>
    </div>
@endsection