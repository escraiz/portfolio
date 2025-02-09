<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home/home.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>Home</title>
</head>
<body>
    <!--MENÚ-->
    <header>
        <div class="container">
            <img src="../img/logo.png" alt="">
            <input type="checkbox" id="btn-menu">
            <label class="icon-menu-1" for="btn-menu"></label>
            <nav class="container-menu">
                    <!--Se hace el menú mediante enlaces porque es un menú sencillo-->
                    <a href="home.php">INICIO</a>
                    <a href="menu.php">MENU</a>
                    <a href="pedidos.php">PEDIDOS</a>
                    <a href="configuracion.php">CONFIGURACIÓN</a>
                    <a href="../php/loginout.php"><i name="loginout" class="icon-user-circle-o"></i></a>
            </nav>
        </div>
    </header>
    <!--BANNER-->
    <main>
        <section id="banner">
            <img src="../img/banner.jpg">
            <div class="container">
                <h2>Restaurante Peñacastillo</h2>
                <a href="#">Leer más</a>
            </div>
        </section>
        <section id="welcome">
            <h2>BIENVENIDOS A NUESTRO RESTAURANTE</h2>
            <p>Es un placer darles la bienvenida a nuestra familia de restaurante, espero que esta pagina os ayude.</p>
        </section>
        <section id="pag">
            <h3>PÁGINAS</h3>
            <div class="container">
                <article>
                    <img src="../img/menu.jpg">
                    <a href="menu.php"><h4>MENÚS</h4></a>
                </article>
                <article>
                    <img src="../img/pedidos.jpg">
                    <a href="pedidos.php"><h4>PEDIDOS</h4></a>
                </article>
                <article>
                    <img src="../img/platos.jpg">
                    <a href="elaboraciones.php"><h4>PLATOS</h4></a>
                </article>
            </div>
        </section>
        <section id="plate">
            <h3>NUESTROS PLATOS</h3>
                <div class="container">
                <div class="container-img">
                    <img src="../img/plato1.jpg">
                </div>
                <div class="container-img">
                    <img src="../img/plato2.jpg">
                </div>
                <div class="container-img">
                    <img src="../img/plato3.jpg">
                </div>
                <div class="container-img">
                    <img src="../img/plato4.jpg">
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-content">
            <h3>RESTAURANTE PEÑASCASTILLO</h3>
          
            <ul class="socials">
                <li><a href ="https://es-es.facebook.com/"><i class="fab fa-facebook"></i></li>
                <li><a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>
                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <h4>Teléfono: 942 32 16 50</h4>
            <p>copyright &copy;2021  desiñeado by <span>Grupo5</span></p>
        </div>
    </footer>
</body>
</html>