<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="{{ asset('css/exterior/inicio.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>

    <main class="wapper">
    <section id="seccionprincipal">
        <header class="encabezado">
            <img src="img/logos/logotipo3.png" alt="Logo Kinesfera">
            <nav>
                <a href="{{url('../')}}">Inicio</a>
                <a href="{{url('exterior/noticias')}}">Noticias</a>
                <a href="{{url('exterior/eventos')}}">Eventos</a>
                <a href="{{url('exterior/biblioteca')}}">Biblioteca</a>
                <a href="{{url('exterior/galeria')}}">Galeria</a>
                <a href="{{url('exterior/login')}}">Ingresar</a>
            </nav> 
        </header>
        <img  class="fondo" src="img/interfaz_externa/inicio/principal2.jpg" alt="">
    </section>

    <!--inicio de contenedor de la partes de "nosotros"-->
    <section id="secondsection">
        <header>
        <h1>Corporacion Artistica</h1>
        <p>Kinesfera Lab</p></header>
        <div class="cards">
            <div class="imagen">
                <img src="img/interfaz_externa/inicio/imagen_uno.jpg" ></div>
                <div class="content" >
                    <h2 class="titulo_cards">Nosotros</h2>
                    <p class="texto">La búsqueda de la unión de las diferentes
                         ramas del arte a favor del desarrollo de diferentes
                        procesos de creación artística experimental. 
                        Incentivamos y apoyamos la exploración
                        e investigación en el campo de las artes visuales y 
                        plásticas, escénicas, musicales y
                        literarias en la ciudad de Medellín.</p><!--texto de "nosotros "-->
                </div>
        </div>
    </section>
    <!--fin del contenedor de "nosotros"-->
    <!--inicio de contenedor de "metas"-->
    <section id="threesection" >
        <header class="header2">
            <h1>Visión</h1>
            <p>Kinesfera Lab</p></header>
        <div class="cards">
            <div id="img_derecha">
                <img src="img/interfaz_externa/inicio/imagen_dos.jpg" ></div>
                <div  id="content_izquierda">
                    <h2 class="titulo_cards2">Metas</h2>
                    <p class="texto2">Para el año 2026 la Corporación
                        Kinesfera Lab será reconocida
                        internacionalmente por conectar
                        y desarrollar nuevas técnicas y
                        metodologías del arte emergente
                        en la ciudad de Medellín con el
                        exterior, permitiendo que las
                        investigaciones en artes sean
                        procesos abiertos que vayan más
                        allá del contexto académico.</p> <!--texto de metas-->
                </div>
        </div>
    </section>
    <!--fin de contenedor de "metas"-->

    <section id="foursection">
        <header>
            <h1>Misión</h1>
            <p>Kinesfera Lab</p></header>
        <div class="cards">
            <div class="imagen">
                <img src="/img/interfaz_externa/inicio/imagen_tres.jpg" ></div>
                <div class="content">
                    <h2 class="titulo_cards">Nuestro Objetivo</h2>
                    <p class="texto">Potenciar el desarrollo de la creación
                        artística experimental para que la
                        comunidad fundamente los diferentes
                        procesos de creación en pro de la
                        investigación y visibilidad de las
                        metodologías emergentes en el arte.</p>
                </div>
        </div>
    </section>



