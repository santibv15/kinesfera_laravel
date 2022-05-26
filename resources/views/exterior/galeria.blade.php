<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kinesfera Lab</title>
        <link rel="stylesheet" href="{{asset('css/exterior/galeria.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	    <link rel="icon" type="image/png" href="img/portafolio/logotipo.PNG">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <!-- COMIENZO MENU -->
        <header>
            <img src="../img/logos/logotipo3.png" alt="Logo Kinesfera">
            <h1>Kinesfera <span> Lab</span></h1>
            <nav>
                <a href="{{url('../')}}">Inicio</a>
                <a href="{{url('exterior/noticias')}}">Noticias</a>
                <a href="{{url('exterior/eventos')}}">Eventos</a>
                <a href="{{url('exterior/biblioteca')}}">Biblioteca</a>
                <a href="{{url('exterior/galeria')}}">Galeria</a>
                <a href="{{url('exterior/login')}}">Ingresar</a>
            </nav>
        </header> <br>
       <!--  FIN MENU -->

       <!-- COMIENZO PORTAFOLIO -->

       <section class="container-grid">
           <img src="../img/interfaz_externa/galeria/tres.jpg" alt="realizado por: KaterineMS@gmail.com " class="img img-1">
           <img src="../img/interfaz_externa/galeria/dos.jpg" alt="realizado por: PedroEC@gmail.com " class="img img-2">
           <img src="../img/interfaz_externa/galeria/nueve.jpg" alt="realizado por: PedroEH@gmail.com" class="img img-4">
           <img src="../img/interfaz_externa/galeria/seis.jpg" alt="realizado por: JavierHS@gmail.com" class="img img-3">
           <img src="../img/interfaz_externa/galeria/obra8.jpg" alt="realizado por: SandraMB@gmail.com" class="img img-5">
           <img src="../img/interfaz_externa/galeria/fondo.jpg " alt="realizado por: MariaCZ@gmail.com" class="img img-6">
           <div class="container-img">
                <img src="" alt="" class="img-show">
                <i class="bx bx-x"></i>
                <p class="copy"></p>
           </div>
       </section>
       <script src="{{asset ('js/exterior/galeria.js')}}"></script>
    </body>
</html>