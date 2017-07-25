<h1>@yield('titulo')</h1>
<body>
    @section('toolbar')
    <p>Padre</p>
    @show
    @yield('content')
</body>