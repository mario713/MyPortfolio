@section('head')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>{{ Config::get('website.title') }}</title>

    <link href="{{url('/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css' />



    <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon">


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

    <script type="text/javascript" src="{{url('/js/plugins/flot/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/flot/jquery.flot.orderBars.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/flot/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/flot/excanvas.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/flot/jquery.flot.resize.js')}}"></script>

    <script type="text/javascript" src="{{url('/js/plugins/forms/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/autosize.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/autotab.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/validationEngine-en.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/validationEngine.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/listbox.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/inputlimiter.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/forms/cleditor.js')}}"></script>

    <script type="text/javascript" src="{{url('/js/globalize/globalize.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/globalize/globalize.culture.de-DE.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/globalize/globalize.culture.ja-JP.js')}}"></script>

    <script type="text/javascript" src="{{url('/js/plugins/uploader/plupload.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/uploader/plupload.html5.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/uploader/plupload.html4.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/uploader/plupload.queue.js')}}"></script>

    <script type="text/javascript" src="{{url('/js/plugins/wizards/form.wizard.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/wizards/validate.js')}}"></script>

    <script type="text/javascript" src="{{url('/js/plugins/ui/progress.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/jgrowl.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/tipsy.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/alerts.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/colorpicker.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/mousewheel.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/calendar.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/dataTables.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/breadcrumbs.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/collapsible.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/ToTop.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/listnav.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/sourcerer.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/timeentry.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/plugins/ui/prettyPhoto.js')}}"></script>

    <script type="text/javascript" src="{{url('/js/custom.js')}}"></script>

    <!-- <script type="text/javascript" src="{{url('/js/charts/chart.js')}}"></script> -->



</head>
@endsection

@section('editor_init')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection

@section('editor')
<div class="panel-body">
    <textarea>Write content here!</textarea>
</div>
@endsection

@section('top_navbar')
    <!-- Top navigation bar -->
    <div id="topNav">
        <div class="fixed">
            <div class="wrapper">
                @if(Auth::Check())
                    <form id="logout" action="{{ route('logout') }}" method="post"> {{ csrf_field() }} </form>
                    <div class="welcome"><a href="#" title=""><img src="{{url('images/userPic.png')}}" alt="" /></a><span>{{Auth::user()->username}}</span></div>
                    <div class="userNav">
                        <ul>
                            <!--
                            <li style="padding-right: 11px;"><a href="{{ url('/lang/en') }}"><img src="{{ url('/images/icons/color/uk.png') }}" /></a></li>
                            <li style="padding-right: 11px;"><a href="{{ url('/lang/pl') }}"><img src="{{ url('/images/icons/color/poland.png') }}" /></a></li>
                            -->
                            @hasrole('admin')
                            <li><a href="{{url('/admin')}}" title=""><img src="{{url('images/icons/topnav/tasks.png')}}" alt="" /><span>Admin Panel</span></a></li>
                            @endhasrole

                            <li><a href="{{url('/profile')}}" title=""><img src="{{url('images/icons/topnav/profile.png')}}" alt="" /><span>Profile</span></a></li>
                            <li class="dd"><a title=""><img src="{{url('images/icons/topnav/messages.png')}}" alt="" /><span>Messages</span><!-- <strong class="numberTop">8</strong> --></a>
                                <ul class="menu_body">
                                    <li><a href="{{ url('/messages/new') }}" title="" class="sAdd">New Message</a></li>
                                    <li><a href="{{ url('/messages/inbox') }}" title="" class="sInbox">Inbox</a></li>
                                    <li><a href="{{ url('/messages/outbox') }}" title="" class="sOutbox">Outbox</a></li>
                                    <li><a href="{{ url('/messages/trash') }}" title="" class="sTrash">Trash</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/settings')}}" title=""><img src="{{url('images/icons/topnav/settings.png')}}" alt="" /><span>Settings</span></a></li>
                            <li><a href="{{route('logout')}}" title=""><img src="{{url('images/icons/topnav/logout.png')}}" alt="" /><span>Logout</span></a></li>
                        </ul>
                    </div>
                @else
                    <div class="welcome">
                            <ul>
                                <li><a href="{{ url('/') }}" title=""><img src="{{url('images/icons/topnav/mainWebsite.png')}}" alt="" /><span>Main Page</span></a></li>
                            </ul>
                    </div>
                    <div class="userNav">
                        <ul>
                            <!--
                            <li style="padding-right: 11px;"><a href="{{ url('/lang/en') }}"><img src="{{ url('images/icons/color/uk.png') }}" /></a></li>
                            <li style="padding-right: 11px;"><a href="{{ url('/lang/pl') }}"><img src="{{ url('images/icons/color/poland.png') }}" /></a></li>
                            -->
                            <li><a href="{{url('/login')}}" title=""><img src="{{url('images/icons/topnav/login.png')}}" alt="" /><span>Login</span></a></li>
                            @if(Config::get('website.registration'))
                                <li><a href="{{url('/register')}}" title=""><img src="{{url('images/icons/topnav/register.png')}}" alt="" /><span>Register</span></a></li>
                            @endif
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('header')
    <!-- Header -->
    <div id="header" class="wrapper">
        <div class="logo"><a href="{{ url('/') }}" title=""><img src="{{url('images/logo.png')}}" alt="" /></a></div>

        <ul class="middleNav">
            @foreach(config('menu') as $mlink)
                @if($mlink['active'] == true)
                <li class="{{$mlink['icon']}}"><a href="{{url($mlink['url'])}}" title=""><span>{{$mlink['name']}}</span></a></li>
                @endif
            @endforeach
        </ul>

    </div>
@endsection

@section('leftnav')
    @if(!empty($left_menu))
        <!-- Left navigation -->
        <div class="leftNav">
            <ul id="menu">
                @foreach($left_menu as $menu_item)
                    <li class="{{$menu_item['class']}}"><a href="{{$menu_item['url']}}" title=""@if($menu_item['active'] == true) class="active"@endif @if(isset($menu_item['submenu']))class="exp"@endif><span>{{$menu_item['name']}}</span></a>
                    @if(isset($menu_item['submenu']))
                        <ul class="sub">
                            @foreach($menu_item['submenu'] as $submenu_item)
                                <li><a href="{{ $submenu_item['url'] }}" title="">{{ $submenu_item['name'] }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

@section('footer')
    <!-- Footer -->
    <div id="footer">
        <div class="wrapper">
            <span>{{ Config::get('website.footer') }}</span>
        </div>
    </div>
@endsection