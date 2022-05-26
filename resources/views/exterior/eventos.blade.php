<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kinesfera Lab</title>
        <link rel="stylesheet" href="{{asset('css/exterior/eventos.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	    <link rel="icon" type="image/png" href="img/portafolio/logotipo.PNG">
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
        </header>   
        <div class="contenedor_animacion">
            <div class="w-100 contenedor_list">
                <ul>
                    <li>Bienvenido</li>
                    <li>a</li>
                    <li>Eventos</li>
                </ul>
            </div>
        </div>

        <section id="supercaja">
                <div class="caja0"><img class="img3" src="../img/interfaz_externa/eventos/EVENTOS KINESFERA LAB.png"></div>
        </section>

        <div class="wrapper">
            <div class="event">
                <img src="../img/interfaz_externa/eventos/evento1.jpg" alt="">
                <div class="info">
                    <h1>Día Mundial del Teatro: Programación en 11 localidades de Bogotá</h1>
                    <p >MARZO 26 y 27 del 2022</p>
                    <p>El Día Mundial del Teatro se celebrará durante dos días en la capital colombiana.</p>
                    <br>
                    <a href="#evento1" class="btn">Leer mas</a>
                </div>
            </div>
    
            <div class="event">
                <img src="../img/interfaz_externa/eventos/eventos2.jpg" alt="">
                <div class="info">
                    <h1>El Festival Mutante</h1>
                    <p>ABRIL 1 a MAYO 20 del 2022</p>
                    <p>El Museo Nacional de Colombia y Kinerfera Lab reunirá la diversidad sonora colombiana en la primera edición del Festival Mutante</p>
                    <br>
                    <a href="#evento2" class="btn">Leer mas</a>
                </div>
            </div>
    
            <div class="event">
                <img src="../img/interfaz_externa/eventos/evento3.jpg" alt="">
                <div class="info">
                    <h1>Intensivo: resistencia, arte y cuerpos en emergencia</h1>
                    <p>SEPTIEMBRE 16 a 25 del 2021</p>
                    <p>llegará la tercera edición de INTENSIVO, un espacio de participación y encuentro para explorar la potencia de las manifestaciones artísticas y culturales como procesos colectivos de resistencia y transformación.</p>
                    <br>
                    <a href="#evento3" class="btn">Leer mas</a>
                </div>
            </div>
    
            <div class="event">
                <img src="../img/interfaz_externa/eventos/evento6.jpg" alt="">
                <div class="info">
                    <h1>Tatto Music Fest: Fear Factory, Alcolirykoz y más artistas en la 7ª edición</h1>
                    <p>MAYO 21 y 22 del 2022</p>
                    <p>El Tatto Music Fest presenta el cartel completo de artistas que harán parte de su séptima edición. Una programación musical de dos días.</p>
                    <br>
                    <a href="#evento4" class="btn">Leer mas</a>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="event">
                <img src="../img/interfaz_externa/eventos/evento7.jpg" alt="">
                <div class="info">
                    <h1>Los Amigos Invisibles en concierto en Medellín, Cali y Bogotá</h1>
                    <p>DICIEMBRE 2, 3, 4 del 2022</p>
                    <p >Los Amigos Invisibles regresan a Colombia con su gira LAI Tour 2021, después de dos años de ausencia en las tarimas, la banda venezolana regresan para visitar a sus seguidores en tres ciudades colombianas.</p>
                    <br>
                    <a href="#evento5" class="btn">Leer mas</a>
                </div>
            </div>
    
            <div class="event">
                <img src="../img/interfaz_externa/eventos/evento8.jpg" alt="">
                <div class="info">
                    <h1>El Festival de Letras, un espacio para la lectura, la escritura y la palabra</h1>
                    <p>JULIO 31 del 2022</p>
                    <p>Se llevara acabo en diferentes zonas del campus universitario EAFIT.</p>
                    <br>
                    <a href="#evento6" class="btn">Leer mas</a>
                </div>
            </div>
    
            <div class="event">
                <img src="../img/interfaz_externa/eventos/evento5.jpg" alt="">
                <div class="info">
                    <h1>BIME LIVE: Nathy Peluso confirma concierto en bogota</h1>
                    <p>MAYO 7 del 2022</p>
                    <p>La cantante argentina Nathy Peluso, radicada en España desde hace varios años, anunció las fechas oficiales de su gira Calambre. Colombia hace parte del tour en el marco del BIME Bogotá</p>
                    <br>
                    <a href="#evento7" class="btn">Leer mas</a>
                </div>
            </div>
    
            <div class="event">
                <img src="../img/interfaz_externa/eventos/evento4.jpg" alt="">
                <div class="info">
                    <h1>CONVENCION - Colombiana de Pintura</h1>
                    <p>SEPTIEMBRE 14 al 17 del 2022</p>
                    <p>Encuentro artistico, por el amor a la pintura y la expresion artistica</p>
                    <br>
                    <a href="#evento8" class="btn">Leer mas</a>
                </div>
            </div>
        </div>
        


        <!--CLICK DEL EVENTO Y VENTANAS QUE SALEN-->
        <!--EVENTO 1-->
        <article class="evento_click" id="evento1">
            
            <div class="container_click">
                <img class="evento_img" src="../img/interfaz_externa/eventos/evento1.jpg" alt="imagen curso">
                 
               <div class="contenido_evento">    
                <h3>Día Mundial del Teatro</h3>
                <p class="contenid_parrafo">
                    <span>Decripción: </span>Creado en 1961 por el Instituto Internacional del Teatro (ITI), con el fin de conmemorar las artes escénicas y reconocer compañías, actores, directores y todos los involucrados en el arte de la actuación.
                    <br>
                    La fecha oficial es el 27 de marzo, pero en Bogotá empezará desde el 26 con más de 40 obras en 11 localidades. En total serán 36 salas y otros espacios de la ciudad que se unirán para ofrecer descuentos, precios especiales, entradas 2x1 y funciones gratuitas, desde el sábado 26 en la tarde.
                    <br><br>
                    <span>Jornada: </span>Mañana - Tarede<br><br>
                    <span>Horario: </span> 11:00am - 8:00pm<br><br>
                    <span class="fecha">Fecha de inicio: </span> 27 marzo 2022
                </p>    
                
            </div>
            
            <a href="#fivesection" class="close">X</a>
        </article>

        <!--EVENTO 2-->
        <article class="evento_click" id="evento2">
            
            <div class="container_click">
                <img class="evento_img" src="../img/interfaz_externa/eventos/eventos2.jpg" alt="imagen curso">
                 
               <div class="contenido_evento">    
                <h3>El Festival Mutante</h3>
                <p class="contenid_parrafo">
                    <span>Decripción: </span>Este festival permitirá tener una mirada desde la música nacional con los nuevos creadores en diferentes géneros. La primera edición del ‘Festival Mutante’ tiene artistas como Aguas Ardientes, Ha$lopablito, La Muchacha y Santiago Navas.
                    <br>
                    El Festival Mutante es un encuentro con la diversidad artística y las nuevas propuestas musicales de jóvenes de todo el país.
                    <br><br>
                    <span>Jornada: </span>Mañana<br><br>
                    <span>Horario: </span> 10:00am - 3:00pm<br><br>
                    <span class="fecha">Fecha de inicio: </span> 01 abril 2022
                </p>    
                
            </div>
            
            <a href="#fivesection" class="close">X</a>
        </article>

        <!--EVENTO 3-->
        <article class="evento_click" id="evento3">
            
            <div class="container_click">
                <img class="evento_img" src="../img/interfaz_externa/eventos/evento3.jpg" alt="imagen curso">
                 
               <div class="contenido_evento">    
                <h3>TITULO DEL EVENTO</h3>
                <p class="contenid_parrafo">
                    <span>Decripción: </span>Serán días en los que Espacio Odeón se convertirá en un escenario, una protesta, una cocina, un salón de danza y un micrófono abierto.
                    <br>
                    La edición de este año resaltará proyectos artísticos que incomodan, resignifican, reúnen y transforman en el contexto de estallido social en Colombia.
                    <br>
                    Con esta edición de INTENSIVO, Espacio Odeón reunirá colectivos y agentes que privilegian el arte y el símbolo como medios que incomodan, resignifican, convocan y transforman.
                    <br><br>
                    <span>Jornada: </span>Mañana<br><br>
                    <span>Horario: </span> 9:00am - 1:00pm<br><br>
                    <span class="fecha">Fecha de inicio: </span> 20 enero 2022
                </p>    
                
            </div>
            
            <a href="#fivesection" class="close">X</a>
        </article>

        <!--EVENTO 4-->
        <article class="evento_click" id="evento4">
            
            <div class="container_click">
                <img class="evento_img" src="../img/interfaz_externa/eventos/evento6.jpg" alt="imagen curso">
                 
               <div class="contenido_evento">    
                <h3>Tatto Music Fest</h3>
                <p class="contenid_parrafo">
                    <span>Decripción: </span>Un encuentro que permite ver en directo exponentes de todo el mundo, espectáculos, insumos y todo lo relacionado con la cultura del Tatoo.
                    <br>
                    El Tatto Music Fest también es un espacio abierto para skaters y grafiteros; un lugar en el cuál los tatuajes y la música se reúnen para celebrar la creatividad. El Festival se ha convertido en un encuentro no solo para la industria del tatuaje sino para el arte y la cultura alrededor del tema.
                    <br><br>
                    <span>Jornada: </span>Mañana - Tarde<br><br>
                    <span>Horario: </span> 9:00am - 2:00pm<br><br>
                    <span class="fecha">Fecha de inicio: </span> 21 - 22 mayo 2022
                </p>    
                
            </div>
            
            <a href="#fivesection" class="close">X</a>
        </article>

        <!--EVENTO 5-->
        <article class="evento_click" id="evento5">
            
            <div class="container_click">
                <img class="evento_img" src="../img/interfaz_externa/eventos/evento7.jpg" alt="imagen curso">
                 
               <div class="contenido_evento">    
                <h3>Los Amigos Invisibles</h3>
                <p class="contenid_parrafo">
                    <span>Decripción: </span>La banda retoma su gira que se vio interrumpida por la pandemia, las fechas en Estados Unidos, México y algunos países de Latinoamérica cambiaron, pero ahora llegó el momento de volverse a encontrar con sus seguidores y el público que ha sido fiel durante estas tres décadas.
                    <br>
                    En este concierto, Los Amigos Invisibles presentarán parte de las canciones que han lanzado en el último año, entre ellas están Something, La que hay y Eh Eh Oh Oh. 
                    <br><br>
                    <span>Jornada: </span>Tarde<br><br>
                    <span>Horario: </span> 1:00pm - 5:00pm<br><br>
                    <span class="fecha">Fecha de inicio: </span> 2 diciembre 2022
                </p>    
                
            </div>
            
            <a href="#fivesection" class="close">X</a>
        </article>

        <!--EVENTO 6-->
        <article class="evento_click" id="evento6">
            
            <div class="container_click">
                <img class="evento_img" src="../img/interfaz_externa/eventos/evento8.jpg" alt="imagen curso">
                 
               <div class="contenido_evento">    
                <h3>El Festival de Letras</h3>
                <p class="contenid_parrafo">
                    <span>Decripción: </span>Se confirman conferencias, oratorias talleres de escritura creativa, lectura de poesía en voz alta, conversatorios y festivales.
                    <br>
                    El festival se podria considerar una invitacion para los jovenes y adultos a que practiquen mucho mas la lectura y escritura, pues se les invita a participar de las dinamicas recreativas y a expandir sus conocimientos.
                    <br><br>
                    <span>Jornada: </span>Mañana - Tarde<br><br>
                    <span>Horario: </span> 10:00am - 4:00pm<br><br>
                    <span class="fecha">Fecha de inicio: </span> 31 julio 2022
                </p>    
                
            </div>
            
            <a href="#fivesection" class="close">X</a>
        </article>

        <!--EVENTO 7-->
        <article class="evento_click" id="evento7">
            
            <div class="container_click">
                <img class="evento_img" src="../img/interfaz_externa/eventos/evento5.jpg" alt="imagen curso">
                 
               <div class="contenido_evento">    
                <h3>BIME LIVE: Nathy Peluso</h3>
                <p class="contenid_parrafo">
                    <span>Decripción: </span>El gran encuentro internacional de la industria musical, que desde hace 10 años tiene lugar en Bilbao (España), se realizará este año por primera vez en la capital colombiana. En el BIME, profesionales de más de 50 países se darán cita para hacer negocios, compartir conocimientos y descubrir las últimas innovaciones en todo lo relacionado con la industria musical.
                    <br>
                    En sus diez años de trayectoria en Bilbao, el congreso internacional BIME ha recibido a más de veinte mil asistentes.<br><br>
                    <span>Jornada: </span>Mañana<br><br>
                    <span>Horario: </span> 9:00am - 1:00pm<br><br>
                    <span class="fecha">Fecha de inicio: </span> 20 enero 2022
                </p>    
                
            </div>
            
            <a href="#fivesection" class="close">X</a>
        </article>

        <!--EVENTO 8-->
        <article class="evento_click" id="evento8">
            
            <div class="container_click">
                <img class="evento_img" src="../img/interfaz_externa/eventos/evento4.jpg" alt="imagen curso">
                 
               <div class="contenido_evento">    
                <h3>convencion de pintura</h3>
                <p class="contenid_parrafo">
                    <span>Decripción: </span>La Convención Internacional de Pintura y Manualidades de Colombia nace el 9 de febrero del 2006 en la ciudad de Medellín, como una necesidad y un sueño de Patricia de Torres, persona incansable en la búsqueda de lograr fundar un evento de grandes proporciones que reuniera a pintores y manualistas tanto nacionales como internacionales, así como empresarios del arte, alumnos y visitantes en un solo lugar.<br><br>
                    <span>Jornada: </span>Mañana - Tarde<br><br>
                    <span>Horario: </span> 11:00am - 5:00pm<br><br>
                    <span class="fecha">Fecha de inicio: </span> 14 septiembre 2022
                </p>    
                
            </div>
            
            <a href="#fivesection" class="close">X</a>
        </article>


        

        <script src="{{asset ('js/exterior/eventos.js')}}"></script>
    </body>
</html>