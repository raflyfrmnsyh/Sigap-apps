@include('Masyarakat\Tamplate\Partials\_head')

    <div class="wrapper">
        <div class="container-sm">
            @yield('content')
            @yield('formAuth')
        </div>
    </div>
    
@include('Masyarakat\Tamplate\Partials\_footer')