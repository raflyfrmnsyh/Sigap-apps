@include('Petugas.Tamplate.partials._head')

<div class="layout-wrapper layout-content-navbar">
    @include('Petugas.Tamplate.partials._sidebar')

    <div class="layout-page">
        @include('Petugas.Tamplate.partials._navbar')
        <div class="content-wrapper">
            @yield('content')
            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content-container')
            </div>
            <div class="content-backdrop fade"></div>
        </div>
    </div>
</div>

@include('Petugas.Tamplate.partials._foot')