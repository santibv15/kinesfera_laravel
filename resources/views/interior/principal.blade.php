<!--
<?php
// Llamar la conexión
include "../../../bd/Conexion.php";
// Iniciar trabajo con sessiones
session_start();
// verificar que no este llegando la variable de ssesion
if (!isset($_SESSION['ID_USUARIO'])){
   echo "<script>window.location='../../interfaz_externa/login.html';</script>";
}
?>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/interior/principal.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body id="body">
    <!--<h1>Aprendizz <?php echo $_SESSION['NOMBRES_USUARIO'];?></h1>-->

<header>
    <div class="icon__menu"><i class='bx bx-menu' id="btn_open"></i></div>
</header>

<div class="menu__side" id="menu__side">

    <div class="name__page">
        <img src="../../img/logos/logotipo3.png" id="icono-kinesfera" alt="">
        <h4 id="titulo-kinesfera">Kinesfera<span style="color: transparent;">_</span>Lab</h4>
    </div>

    <div class="options__menu">

        <a href="" >
            <div class="option">
                <i class='bx bxs-home' title="inicio"></i>
                <h4>Clases</h4>
            </div>
        </a>
        <a href="">
            <div class="option">
                <i class='bx bx-world' title="Explorar"></i>
                <h4>Explorar</h4>
            </div>
        </a>
        <a href="" >
            <div class="option" >
                <i class='bx bxs-folder-open'  title="Laboratorio Artistico"></i>
                <h4>Laboratorio Artistico</h4>
            </div>
        </a>

        <a href="" class="selected">
            <div class="option">
                <i class='bx bx-user' title="perfil"></i>
                <h4>Perfil</h4>
            </div>
        </a>
        <a href="../../../controllers/login/salir.php" onclick=" return confirmSalir()">
            <div class="option option_uni">
                <i class='bx bx-log-in' title="salir"></i>
                <h4>Salir</h4>
            </div>
        </a>
    </div>

</div>
<main>

</main>


<!--FIN DE MENU DEL ADMINISTRADOR-->


    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="../../img/interfaz_externa/galeria/cinco.jpg" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <button type="button" class="boton-portada">
                    <i class="far fa-image"></i> Cambiar fondo
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">Laura Cristina Rosita</h3>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> Rol: </li>
                    <li><i class="icono fas fa-phone-alt"></i> Telefono: </li>
                    <li><i class="icono fas fa-briefcase"></i> Clases: </li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-marker-alt"></i> Direccion:</li>
                    <li><i class="icono fas fa-calendar-alt"></i> Horario: </li>
                    <li><i class="icono fas fa-user-check"></i> Edad: </li>
                </ul>
            </div>

            <div class="redes-sociales">
                <a href="" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
            </div>

        </div>
    </section>

    <script src="../../js/interfaz_interna/menu.js"></script>
    <script src="../../js/interfaz_interna/alertas.js"></script>
</body>
</html>
