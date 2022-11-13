<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>

    {{-- <header>
        <nav>
            <div>
                <p>Icono</p>
            </div>
            <ul>
                <a href="/images">Gallery</a>
                <a href="/images/create">Registrar</a>
            </ul>
        </nav>
    </header> --}}
    <header>
        <nav>
            <a href="/images">Inicio</a>
            <a href="/images/create">Acerca de</a>
            <a href="">Portafolio</a>
            <a href="">Servicios</a>
            <a href="">Contacto</a>
        </nav>
        <section class="textos-header">
            <h1>Potencia tus ventas</h1>
            <h2>con una pagina web potente</h2>
        </section>

        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.21,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <main>
        <section class="contenedor">
            @yield('content')
        </section>
    </main>

   
</body>
</html>