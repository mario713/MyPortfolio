@extends('layouts.app')

@section('content')
    <div class="title"><h5>News</h5></div>

    <!-- Accordion -->
    <div class="widget acc">
        <div class="head"><h5>Accordion menu. Active</h5></div>
        <div class="menu_body">
            This is an accordion. This one is opened by default
        </div>
        <div class="head"><h5>Accordion menu. Inactive</h5></div>
        <div class="menu_body">
            Now this one is active
        </div>
        <div class="head"><h5>Accordion menu. Inactive</h5></div>
        <div class="menu_body">
            And now this one...
        </div>
    </div>
@endsection