@include('layouts.elements')
@yield('head')
@yield('top_navbar')

<!-- Error info area -->
<div class="wrapper">
    <div class="errorPage">
        <h2 class="red errorTitle"><span>Something went wrong here</span></h2>
        <h1>403</h1>
        <span class="bubbles"></span>
        <p>Oops! Sorry, an error has occured. Access forbidden!</p>
        <div class="backToDash"><a href="index.html" title="" class="seaBtn button">Back to Dashboard</a></div>
    </div>
</div>


@yield('footer')