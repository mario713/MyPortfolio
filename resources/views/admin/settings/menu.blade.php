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

    @if (isset($success))
        <div class="wrapper" style="max-width: 600px;">
            <div class="nNote nSuccess hideit">
                <p><strong>Success: </strong>{{$success}}</p>
            </div>
        </div>
    @endif


    <!-- Static table -->
    <div class="widget first">
        <div class="head"><h5 class="iFrames">Menu</h5></div>
        <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic" style="text-align: center;">
            <thead>
            <tr>
                <td width="15%">ID</td>
                <td width="20%">Name</td>
                <td width="15%">Icon</td>
                <td width="25%">URL</td>
                <td width="10%">Order</td>
                <td width="15%">Action</td>
            </tr>
            </thead>
            <tbody>
            @if(!empty($smenu))
                @foreach($smenu as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->icon }}</td>
                            <td>{{ $item->url }}</td>
                            <td>{{ $item->order }}</td>
                            <td>
                                <a href="{{ url('/admin/news/categories/move_up/'.$item->id) }}"><img src="{{ url('images/icons/color/arrow-curve-090.png') }}" class="topDir" value="top direction" original-title="Move Up"/></a>
                                <a href="{{ url('/admin/news/categories/delete/'.$item->id) }}"><img src="{{ url('images/icons/color/cross.png') }}" class="topDir" value="top direction" original-title="Delete"/></a>
                                <a href="{{ url('/admin/news/categories/move_down/'.$item->id) }}"><img src="{{ url('images/icons/color/arrow-curve-270.png') }}" class="topDir" value="top direction" original-title="Move Down"/></a>
                            </td>
                        </tr>
                @endforeach
            @endif
            <tr>
                <form action="{{ url('/admin/menu/add') }}" method="post">
                    {{ csrf_field() }}
                    <td>
                        <strong><h6>New Menu Link</h6></strong>
                    </td>
                    <td>
                        <input type="text" name="menu_name" style="width: 50%;">
                    </td>
                    <td>
                        <input type="text" name="menu_icon" style="width: 50%;">
                    </td>
                    <td>
                        <input type="text" name="menu_url" style="width: 50%;">
                    </td>
                    <td>
                        <input type="text" name="menu_order" style="width: 60%;"@if(!empty($smenu_order)) value="{{$smenu_order}}"@endif>
                    </td>
                    <td>
                        <input type="submit" value="Add" class="greenBtn">
                    </td>
                </form>
            </tr>
            </tbody>
        </table>
    </div>
@endsection