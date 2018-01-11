<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">



<body>
    <div id="app">
        

        <div >
            @yield('content')
        </div>

        <div>@yield('anime')</div>

        
    </div>

    <!-- Scripts -->
   

    @yield('scripts')

</body>
</html>
