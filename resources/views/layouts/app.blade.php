<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--link para conectar a la carpeta css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    

    <!--link para las letras diseño-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

    <header id="titulo">
        <nav>
            <a href="{{ route('images.index') }}" >Inicio</a>
            <a href="" class="option_bloqueado">Acerca de</a>
            <a href="{{ route('tarea.create') }}">Registro Viaje</a>
            <a href="" class="option_bloqueado">Servicios</a>
            <a href="#footer">Contacto</a>
        </nav>
        <section class="textos-header">
            <h1>Viaja y Disfruta lo mejor de Perú</h1>
            <h2>con una variedad de </h2>
        </section>

        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.21,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>

    <section class="container" >
        @yield('content')
    </section>
   
    <footer id="footer">
        <section>
            <a href="yosec.suarez@gmail.com">Contáctame</a>
            <a href="#titulo">Ir al comienzo</a>
        </section>
        <p>Copyright 2022</p>
    </footer>
   
</body>
</html>