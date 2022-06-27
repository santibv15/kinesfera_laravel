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
            <a href="{{url('../')}}">Inicio</a>
            <a href="{{url('exterior/noticias')}}">Noticias</a>
            <a href="{{url('exterior/eventos')}}">Eventos</a>
            <a href="{{url('exterior/biblioteca')}}">Biblioteca</a>
            <a href="{{url('exterior/galeria')}}">Galeria</a>
            <a href="{{url('exterior/login')}}">Ingresar</a>
        </nav>

        @if (session('success'))
        <p class="alert alert-danger" >{{session('success')}}</p>

        @endif

        @if($errors->any)
        @foreach ($errors->all() as $err )
        <p class="alert alert-danger" >{{$err}}</p>
        @endforeach
        @endif
    </header> <br>

    <div id="login-form" class="login-page">

        <div class="form-box">

            <div class="button-box">
                <div id="btn"></div>
                <button type="button" onclick="login()" class="toggle-btn">Iniciar Sesion</button>
                <button type="button" onclick="register()" class="toggle-btn">Registrarse</button>
            </div>
            <!--iniciar sesion-->
            <form id="login" method="POST" class="input-group-login" action="{{ route('login.inicio')}}">
                @csrf
                <h2 class="titulo_login">Inicio de Sesion</h2>
                <input type="email" name="correo_usuario" class="input-field" placeholder="Correo Electronico" required>
                <input type="password" name="clave_usuario" class="input-field" placeholder="Contraseña" required>
                <button type="submit" name="btn_ingresar" class="submit-btn" >Iniciar Sesion</button>
            </form>

            <!--registrar-->
            <form id="register" method="post" class="input-group-register" action="{{ route('register.inicio')}}">
                @csrf
                <h2 class="titulo_register">Registrar</h2>
                <input type="text" class="input-field" name="nombres_usuario" placeholder="Nombres">
                <input type="text" class="input-field" name="apellidos_usuario" placeholder="Apellidos">
                <input type="number" class="input-field" name="edad_usuario" placeholder="Edad">
                <input type="number" class="input-field" name="telefono_usuario"  placeholder="Numero de telefono">
                <input type="email" class="input-field" name="correo_usuario" placeholder="Correo Electronico">
                <input type="password" class="input-field" name="clave_usuario" placeholder="contraseña">
                <input type="password" class="input-field" name="clave_usuario_confirm" placeholder="Confimar Contraseña">
                {{-- <input type="number" name="id_cargo_usuario" value="4" hidden> --}}
                <input type="text" name="estado_usuario" value="Activo" hidden>
                <button type="submit" name="btn_registro" class="submit-btn" >Registrarse</button>
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
