<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Shippori+Antique&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="{{ asset('css/exterior/noticias.css') }}">
</head>
<body>

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
    </header>

    <section class="clientes_contenedor">
        <div class="cards">
          
          
            <a href="#noticia_uno" class="card">
                <img src="../img/interfaz_externa/noticias/N1.jpg" alt="">
                <div class="contenido-texto-card">
                    <h4>Noticia destacada</h4>
                    <p>Juli About revoluciona la porcelana con sus exvotos de corazones, clítoris y bragas 
                    </p>
            </div>
            </a>
            <a href="#noticia_dos" class="card">
                <img src="../img/interfaz_externa/noticias/N2.jpg" alt="">
                <div class="contenido-texto-card">
                    <h4>Noticia destacada</h4>
                    <p>La Guardia Civil investiga el robo de dos cuadros de Edgar Degas en Galicia  </p>
                </div>
            </a>

            <a href="#noticia_tres" class="card">

                <img src="../img/interfaz_externa/noticias/N3.1.png" alt="">
                <div class="contenido-texto-card">
                    <h4>Noticia destacada</h4>
                    <p>Roban dos dibujos de Dalí en un piso de Barcelona  </p>
                </div>
            </div>
            </a>            
        </div>
    </section>

    <!--IMAGENES QUE VOLTEAN CON CURSOR-->

    <div class="contenedor_imagenes">
        <h2>OTRAS NOTICIAS</h2>
        <div class="tarjeta_eventos">
            <div class="tarjeta">
                <div class="adelante card1">
                    <img src="../img/interfaz_externa/noticias/noticiaglobal.jpg" alt="">
                </div>
                <div class="atras">
                    <img src="../img/interfaz_externa/noticias/noticiaglobal.jpg" alt="">
                    <div class="contenedor_contenido">
                         <h2 class="atras_titulo ">Museo virtual exhibe obras de artistas mexicanas</h2>
                        <p>El Museo de Mujeres Artistas Mexicanas es un recinto virtual que contiene un archivo de las pintoras, escultoras y fotógrafas del país. De esta manera, el MUMA trata de motivar un diálogo amplio sobre el arte y el género en México.
                        </p>
                  </div>
                </div>
            </div>
        </div>

        <div class="tarjeta_eventos">
            <div class="tarjeta">
                <div class="adelante card2">
                    <img src="../img/interfaz_externa/eventos/evento5.jpg" alt="">
                </div>
                <div class="atras">
                    <img src="../img/interfaz_externa/eventos/evento5.jpg" alt="">
                    <div class="contenedor_contenido">
                        <h2 class="atras_titulo ">Hackear la realidad como acto poético </h2>
                        <p>Un siglo antes de los ciberataques más sofisticados al Pentágono o de paralizar el sistema administrativo de toda una ciudad como Baltimore, el primer hackeo de la historia fue en código morse. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="tarjeta_eventos">
            <div class="tarjeta">
                <div class="adelante card3">
                   <img src="../img/interfaz_externa/eventos/evento3.jpg" alt="">
                </div>

                <div class="atras">
                    <img src="../img/interfaz_externa/eventos/evento3.jpg" alt="">
                    <div class="contenedor_contenido">
                        <h2 class="atras_titulo ">John H. Elliott, entre Oxford y el Museo del Prado </h2>
                        <p>Lúcido hasta sus últimas horas, Sir John Elliott permaneció intelectualmente activo también hasta el final. En los últimos meses trabajaba en un libro sobre el imperio portugués y el español. </p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!--CONTENIDO DE LAS NOTICIAS DESTACADAS-->

    <article class="noticias_big" id="noticia_uno">
        <div class="container"><img src="../img/interfaz_externa/noticias/N1.1.jpg" alt="imagen">
            <div class="second"><i class="fas fa-user-circle" id="user"></i><h2>Kinesfera Lab</h2>
                <pre>Kinesfera_lab@gmail.com</pre>
                <p>Conocer la obra de Juli About (Avignon, 1974) me impacta tanto que instantáneamente pienso en pedirle matrimonio, porque yo solo me caso con gente a la que admiro (aunque luego se me pase) después de estar a punto de desmayarme vía Síndrome de Stendhal. Y aquello, porque bajo su absoluta delicadeza, cercana a la irrealidad, la obra de la ceramista más interesante del momento encierra un peligro, y solo hay belleza donde hay peligro, que es parte sustancial del misterio. 

                    Juli About trae parte de su ingente obra a la decimotercera edición de la feria de arte emergente JUSTMAD, del 24 al 27 de febrero en el Palacio Neptuno de Madrid, lo que significa corazones de porcelana abrazados por espesas venas, pies y manos desgajados del cuerpo, paños de adoración con una vulva en el centro, bragas con más de un sentido... </p></div>
        </div>
        <a href="#noticia_dos" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>

    <article class="noticias_big" id="noticia_dos">
        <a href="#noticia_uno" class="next"><i class="fas fa-arrow-left"></i></a>
        <div class="container"><img src="../img/interfaz_externa/noticias/N2.jpg" alt="imagen">
            <div class="second"><i class="fas fa-user-circle" id="user"></i><h2>Kinesfera Lab</h2>
                <pre>Kinesfera_lab@gmail.com</pre>
                <p>La sección de patrimonio de la policía judicial de la Guardia Civil de Pontevedra investiga la desaparición de dos valiosos cuadros del pintor francés Edgar Degas en un chalet de Nigrán (Pontevedra). 

                    La investigación, según han confirmado fuentes del instituto armado, se inició a raíz de la denuncia presentada en el puesto de Baiona por su propietario. 
                    
                    La residencia de la que presuntamente desaparecieron ambos cuadros está en Monteferro, una zona de exclusivos chalets de esta localidad turística. 
                    
                    Más en El Mundo 
                    
                    Los dos cuadros desaparecieron de la casa de su propietario cuando este estaba de viaje. 
                    
                    El pintor, escultor y grabador Edgar Degas (1934-1917) está considerado como uno de los padres del impresionismo y sus obras, algunas de las cuales alcanzan precios de millones de euros en las casas de subastas más prestigiosas del mundo, se encuentran entre las más buscadas por los coleccionistas. </p></div>
        </div>
        <a href="#noticia_tres" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>

    <article class="noticias_big" id="noticia_tres">
        <a href="#noticia_dos" class="next"><i class="fas fa-arrow-left"></i></a>
        <div class="container"><img src="../img/interfaz_externa/noticias/N3.jpg" alt="imagen">
            <div class="second"><i class="fas fa-user-circle" id="user"></i><h2>Kinesfera Lab</h2>
                <pre>Kinesfera_lab@gmail.com</pre>
                <p>Los Mossos d'Esquadra están investigando desde este domingo el presunto robo de dos dibujos de Dalí de un piso de Barcelona, según ha avanzado 'La Vanguardia'. 

                    Los dibujos son, según expertos, "Les sardanes de festa major" y "Vi ranci" (1922), dos dibujos a carboncillo sobre papel de primera época de Salvador Dalí. Aunque ni la Fundación Dalí ni la Policía han querido hacer una valoración económica de las obras robadas, la familia, según fuentes cercanas al caso, habría asegurado que cada uno de ellos está valorado en unos 300.000 euros, según Efe. 
                    
                    Fuentes policiales han explicado que los Mossos d'Esquadra recibieron el aviso sobre las 17.15 horas, cuando los inquilinos de un piso del barrio de Sarrià-Sant Gervasi denunciaron que habían entrado a robar en su casa y se habían llevado los cuadros, según Europa Press. 
                    
                    Más en El Mundo 
                    
                    Al llegar, los agentes comprobaron que el acceso a la vivienda había sido forzado, y la División de Investigación Criminal (DIC) inició la investigación para esclarecer los hechos y confirmar la autenticidad de los cuadros robados. 
                    
                    Las obras robadas formaban parte de un grupo de cuatro ilustraciones hechas en 1922 por un joven Dalí de 18 años para una edición de lujo del libro "Les gràcies de l'Empordà" del político y escritor nacido en Barcelona y de padres ampurdaneses Pere Corominas (Barcelona, 1870-Buenos Aires, 1939) que no se llegó a publicar. </p></div>
        </div>
        <a href="#" class="close">X</a>
    </article>
    
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>8296312</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>8296312</p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>8296312</p>
            </div>
        </div>
    </footer>
</body>

</html>
