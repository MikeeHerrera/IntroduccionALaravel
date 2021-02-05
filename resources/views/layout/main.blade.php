<!DOCTYPE html>
<html lang="es">

@include('layout.nav')
@include('layout.header')
<body >
<div class="container">



    @yield('content')
    @yield('edit')
    @yield('create')
    </div>
</body>

</html>