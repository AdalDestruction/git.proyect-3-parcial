
<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a AWP Comics</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/imagehover.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Montserrat|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/main.js"></script>
  </head>
  <body>
  <header>
          <span id="button-menu" class="fa fa-bars"></span>
          <nav class="navegacion">
              <ul class="menu">
                  <li class="title-menu">Menu</li>
                  <li><a href="index.php"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
                  <li class="item-submenu" menu="1">
                      <a href="../shoppingcart.php"><span class="fas fa-shopping-cart"></span> Carrito</a>
                  </li>
                  <li class="item-submenu" menu="2">
                      <a href="tienda-index.php"><span class="fa fa-shopping-bag icon-menu"></span>Tienda</a>
                  </li>
                  <li><a href="aboutUs.php"><span class="fa fa-envelope icon-menu"></span>Quienes somos?</a></li>
              </ul>
          </nav>
      </header>

    <div class="intro">
      <img class="imgF" src="../assets/src/fondo.jpg" alt="">
      
    </div>
    <div class="animated rubberBand delay-2s">
        <p class="cfc">QUIENES SOMOS?</p>
        <p class="res1">SOMOS UNA TIENDA ONLINE EN LA QUE TU VIENES <br>PENSANDO EN COMPRAR UN COMIC Y CIERRAS TU <br>NAVEGADOR CON TU COMIC  EN CAMINO.</p>
    </div>
    <div class="container-comics-graphic">
        <div class="container-comic-1">
          <img 
            src="../assets/src/comics/americanCarnage7.jpg"
            class="americanCarnage7">

            <p class="tittle-comic">AMERICAN CARNAGE #7</p>
            <a href="shop americancarnage/shop.php"><p class="disp">DISPONIBLE AHORA</p></a>
        </div>

        <div class="container-comic-1">
          <img 
            src="../assets/src/comics/aquaman48.jpg"
            class="americanCarnage7">

            <p class="tittle-comic">AQUAMAN #48</p>
            <p class="disp">NO DISPONIBLE</p>
        </div>

        <div class="container-comic-1">
          <img 
            src="../assets/src/comics/batgirlVol5.jpg"
            class="americanCarnage7">

            <p class="tittle-comic">BATGIRL VOL 5: ART OF THE CRIME</p>
            <p class="disp">NO DISPONIBLE</p>

            
        </div>
    </div>

      <div class="must-read">
        <div class="must-read-w-c">
          <img 
              src="../assets/src/comics/wonder comics.jpg" 
              alt="Wonder Comics" 
              width="300" 
              heigth="400">
              <p class="desc1">¡ESTOS NIÑOS ESTÁN LUCHANDO CON TODO!</p>
              <P class="tittle-comic-m-r">WONDER COMICS</P>
        </div>

        <div class="must-read-sand">
          <img 
              src="../assets/src/comics/the sandman universe.jpg" 
              alt="The sandman universe" 
              width="300" 
              heigth="400">
              <p class="desc1">DE LA MENTE DE NEIL GAIMAN</p>
              <P class="tittle-comic-m-r">THE SANDAMAN UNIVERSE</P>
        </div>
        
        <div class="must-read-doom">
          <img 
              src="../assets/src/comics/doomsday clock.jpg" 
              alt="Doomsday Clock" 
              width="300" 
              heigth="400">
              <p class="desc1">LA DOCEAVA EDICIÓN DELUXE SERIES</p>
              <P class="tittle-comic-m-r">DOOMSDAY CLOCK</P>
        </div>
      </div>

      <div class="tittle">
        <h1>SERIES DISPONIBLES</h1>
      </div>

      <div class="container-series">
        <div class="horiz">
          <div class="container-series-1">
              <img 
                class="container-series-img"
                src="../assets/src/current-series/action-comics.jpg" 
                alt=""> 
              <p class="container-series-title"><a href="shop action comics/shop.php">ACTION COMICS</a></p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/adventure-of-the-super-sons.jpg" 
              alt="">
            <p class="container-series-title"><a href="shop adventuresofthesuperson/shop.php">ADVENTURE OF <br> THE SUPER SONS</a></p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/american-carnage.jpg" 
              alt="">
            <p class="container-series-title"><a href="shop americancarnage/shop.php">AMERICAN CARNAGE</a></p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/aquaman.jpg" 
              alt="">
            <p class="container-series-title"><a href="shop aquaman/shop.php">AQUAMAN</a></p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/batgirl.jpg" 
              alt="">
            <p class="container-series-title"><a href="shop batgirl/shop.php">BATGIRL</a></p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/batman.jpg" 
              alt="">
            <p class="container-series-title"><a href="shop batman/shop.php">BATMAN</a></p>
              </div>
            </div>
          </div>
        </div>

        
      <div class="container-series-2">
        <div class="horiz">
          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/batman-beyond.jpg" 
              alt="">
            <p class="container-series-title"><a href="shop batmanbeyond/shop.php">BATMAN BEYOND</a></p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/batman-cotn.jpg" 
              alt="">
            <p class="container-series-title">BATMAN: CREATIURE OF <br> THE NIGTH</p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/batman-damned.jpg" 
              alt="">
            <p class="container-series-title">BATMAN DAMNED</p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/books-of-magic.jpg" 
              alt="">
            <p class="container-series-title">BOOKS OF MAGIC</p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/catwoman.jpg" 
              alt="">
            <p class="container-series-title">CATWOMAN</p>
          </div>

          <div class="container-series-1">
            <img 
              class="container-series-img"
              src="../assets/src/current-series/damage.jpg" 
              alt="">
            <p class="container-series-title">DAMAGE</p>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>
