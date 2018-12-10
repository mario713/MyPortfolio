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

    @if (Session::has('error'))
        <div class="wrapper" style="max-width: 600px;">
            <div class="nNote nFailure hideit">
                <p><strong>Success: </strong>{{Session::get('error')}}</p>
            </div>
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
        <div class="head"><h5 class="iFrames">Categories</h5></div>
        <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic" style="text-align: center;">
            <thead>
            <tr>
                <td width="15%">ID</td>
                <td width="50%">Name</td>
                <td width="15%">Order</td>
                <td width="20%">Action</td>
            </tr>
            </thead>
            <tbody>
            @if(!empty($categories))
                @foreach($categories as $category)
                    @if(!empty($cat_edit) && $category->id == $cat_edit->id)
                        <tr>
                            <form action="{{ url('/admin/news/categories/edit/'.$cat_edit->id) }}" method="post">
                                {{ csrf_field() }}
                                <td>
                                    {{ $cat_edit->id }}
                                </td>
                                <td>
                                    <input type="text" name="category_name" style="width: 50%;" value="{{ $cat_edit->name }}">

                                </td>
                                <td>
                                    <input type="text" name="category_order" style="width: 60%;" value="{{ $cat_edit->order }}">
                                </td>
                                <td>
                                    <input type="submit" value="Save" class="greenBtn">
                                </td>
                            </form>
                        </tr>
                    @else
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->order }}</td>
                            <td>
                                <a href="{{ url('/admin/news/categories/move_up/'.$category->id) }}"><img src="{{ url('images/icons/color/arrow-curve-090.png') }}" class="topDir" value="top direction" original-title="Move Up"/></a>
                                <a href="{{ url('admin/news/categories/edit/'.$category->id) }}"><img src="{{ url('images/icons/color/pencil.png') }}" class="topDir" value="top direction" original-title="Edit"/></a>
                                <a href="{{ url('/admin/news/categories/delete/'.$category->id) }}"><img src="{{ url('images/icons/color/cross.png') }}" class="topDir" value="top direction" original-title="Delete"/></a>
                                <a href="{{ url('/admin/news/categories/move_down/'.$category->id) }}"><img src="{{ url('images/icons/color/arrow-curve-270.png') }}" class="topDir" value="top direction" original-title="Move Down"/></a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endif
            <tr>
                <form action="{{ url('/admin/news/categories/add') }}" method="post">
                    {{ csrf_field() }}
                    <td>
                        <strong><h6>New Category</h6></strong>
                    </td>
                    <td>
                            <input type="text" name="category_name" style="width: 50%;">

                    </td>
                    <td>
                        <input type="text" name="category_order" style="width: 60%;"@if(!empty($cat_order)) value="{{ $cat_order }}"@endif>
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