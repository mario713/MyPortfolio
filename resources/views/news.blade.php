@extends('layouts.app')

@section('content')
    <div class="title"><h5>News</h5></div>

    <!-- Headings -->
    <div class="widget first">
        <div class="head"><h5 class="iCreate">@if(isset($news)){{ $news->title }} @else Welcome @endif</h5></div>
        <div class="body">
            @if(isset($news))
                {!! $news->content !!}

            @endif

                    <br><br><br>
                    <b>Author:</b> <a href="#">mario713</a>
                    <br>
                    <b>Date:</b> 21-11-2018

        </div>
    </div>
@endsection