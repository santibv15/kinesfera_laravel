
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
                <!-- <label for="cargo" class="input-cargo">Cargo: </label>
                <select name="cargo" id="cargo" class="input-cargo-options">
                    <option>Seleccionar</option>
                    <option value="3">Aprendiz</option>
                    <option value="2">Formador</option>
                    <option value="1">Administrador</option>
                </select> -->
                <button type="submit" name="btn_ingresar" class="submit-btn" >Iniciar Sesion</button>
            </form>

            <!--registrar-->
            <form id="register" class="input-group-register" action="{{url('register')}}">
                <h2 class="titulo_register">Registrar</h2>
                <input type="text" class="input-field" name="Nombres" placeholder="Nombres" required>
                <input type="text" class="input-field" name="Apellidos" placeholder="Apellidos" required>
                <input type="number" class="input-field" name="edad" placeholder="Edad" required>
                <input type="number" class="input-field" name="n_tel"  placeholder="Numero de telefono" required>
                <input type="email" class="input-field" name="email" placeholder="Correo Electronico" required>
                <!-- <input type="text" class="input-field" name="n_usuario" placeholder="Nombre de usuario" required> -->
                <input type="password" class="input-field" name="contra" placeholder="contraseña" required>
                <input type="password" class="input-field" name="c_contra" placeholder="Confimar Contraseña" required>
                <input type="number" name="cargo" value="4" hidden>
                <input type="text" name="estado" value="Activo" hidden>
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
