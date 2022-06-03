
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/exterior/login.css')}}">
</head>
<body>
     <!-- COMIENZO MENU -->
     <header>
        <img src="../img/logos/logotipo3.png" alt="Logo Kinesfera">
        <h1>Kinesfera Lab</h1>
        <nav>
            <a href="../../index.php">Inicio</a>
            <a href="noticias.html">Noticias</a>
            <a href="eventos.html">Eventos</a>
            <a href="minibiblioteca.html">Biblioteca</a>
            <a href="galeria.html">Galeria</a>
            <a href="login.html">Ingresar</a>
        </nav>
    </header> <br>

    <div id="login-form" class="login-page">
        @if($errors->any)
        @foreach ($errors->all() as $err )
        <p class="alert" >{{$err}}</p>
        @endforeach
        @endif

        <div class="form-box">

            <div class="button-box">
                <div id="btn"></div>
                <button type="button" onclick="login()" class="toggle-btn">Iniciar Sesion</button>
                <button type="button" onclick="register()" class="toggle-btn">Registrarse</button>
            </div>
            <!--iniciar sesion-->
            <form id="login" class="input-group-login" action="" method="POST">
                <h2 class="titulo_login">Inicio de Sesion</h2>
                <input type="email" name="correo" class="input-field" placeholder="Correo Electronico" required>
                <input type="password" name="contra" class="input-field" placeholder="Contraseña" required>
                <button type="submit" name="btn_ingresar" class="submit-btn" >Iniciar Sesion</button>
            </form>

            <!--registrar-->
            <form id="register" class="input-group-register" action="{{ route('register.action')}}">
                <h2 class="titulo_register">Registrar</h2>
                <input type="text" class="input-field" name="nombres_usuario" placeholder="Nombres" required>
                <input type="text" class="input-field" name="apellidos_usuario" placeholder="Apellidos" required>
                <input type="number" class="input-field" name="edad_usuario" placeholder="Edad" required>
                <input type="number" class="input-field" name="telefono_usuario"  placeholder="Numero de telefono" required>
                <input type="email" class="input-field" name="correo_usuario" placeholder="Correo Electronico" required>
                <input type="password" class="input-field" name="clave_usuario" placeholder="contraseña" required>
                <input type="password" class="input-field" name="clave_usuario_confirm" placeholder="Confimar Contraseña" required>
                <input type="number" name="id_cargo_usuario" value="4" hidden>
                <input type="text" name="estado_usurio" value="Activo" hidden>
                <input type="submit" class="submit-btn" name="btn_registro">
            </form>
        </div>
    </div>

    <script>
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn')
        function register()
        {
            x.style.left = '-400px';
            y.style.left= '50px';
            z.style.left= '148px';

        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    <script>
        var modal = doment.getElementById('login-form');
        window.onclick = function(event)
        {
            if (event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
