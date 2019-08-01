<!DOCTYPE html>
<html>
    <head>
        @yield('title')
        @include('back.layouts.components.head')
        @yield('metalinks')
    </head>
    <body class="skin-black">
        @include('back.layouts.components.header')
        <div class="wrapper row-offcanvas row-offcanvas-left">
            @include('back.layouts.components.leftside')
            <aside class="right-side">
                @yield('container')
            </aside>
        </div>
        @yield('footer')
        @include('back.layouts.components.foot')
        @yield('metafooter')
    </body>
</html>

