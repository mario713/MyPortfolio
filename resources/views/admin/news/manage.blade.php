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

    @if(isset($content))
    <!-- Accordion -->
    <div class="widget acc">
            @foreach($content as $item)
                <div class="head"><h5>{{$item['cat_name']}}</h5></div>
                <div class="menu_body">
                @if(isset($item['news'][0]))
                        <table class="tableStatic" width="100%" cellspacing="0" cellpadding="0" style="text-align: center;">
                            <thead>
                            <tr>
                                <td width="10%">ID</td>
                                <td width="60%">Title</td>
                                <td width="20%">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($item['news'] as $news)
                                <tr>
                                    <td>{{$news->id}}</td>
                                    <td><a href="{{url('/news/'.$news->id)}}" target="_blank">{{$news->title}}</a></td>
                                    <td>
                                        <a href="{{url('/news/'.$news->id)}}" target="_blank"><img src="{{ url('images/icons/color/book-open.png') }}" class="topDir" value="top direction" original-title="Read"/></a>
                                        <a href="{{url('/admin/news/edit/'.$news->id)}}"><img src="{{ url('images/icons/color/pencil.png') }}" class="topDir" value="top direction" original-title="Edit"/></a>
                                        <a href="{{url('/admin/news/delete/'.$news->id)}}"><img src="{{ url('images/icons/color/cross.png') }}" class="topDir" value="top direction" original-title="Delete"/></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                @else
                    No news to show.
                @endif
                </div>
            @endforeach
    </div>
    @else
    <div class="widget" style="border: 1px solid lightgrey;">
        <center>News table is empty.</center>
    </div>
    @endif
@endsection