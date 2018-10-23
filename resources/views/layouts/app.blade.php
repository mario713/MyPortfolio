@include('layouts.elements')

@yield('head')
@yield('top_navbar')
@if(Route::getFacadeRoot()->current()->uri() != 'login' && Route::getFacadeRoot()->current()->uri() != 'register' && Route::getFacadeRoot()->current()->uri() != 'password/reset' && Route::getFacadeRoot()->current()->uri() !=  'password/reset/{token}')
    @yield('header')
    <div class="wrapper">
        @yield('leftnav')

        <div class="content"@if(empty($left_menu))style="width: 100%;"@endif>
            @yield('content')
        </div>
    </div>
@else
    @yield('content')
@endif

@yield('footer')