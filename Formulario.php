<?php
$result="";
if(isset($_POST['submit'])){
    // $mail->Username='gabrielsuarez24@gmail.com';
    // $mail->Password='micuarto24';
    // $mail->addAddress('gabrielsuarez24@gmail.com ');
    // $mail->Body='<h1 align=center>Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['email'].'<br>Asunto: '.$_POST['asunto'].'<br>Telefono: '.$_POST['telefono'].'<br>Mensaje: '.$_POST['mensaje'].'</h1>';
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='lorenaostos1803@gmail.com';
    $mail->Password='26016816';

    $mail->setFrom($_POST['email'],$_POST['nombre']);
    $mail->addAddress('lorenaostos1803@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['nombre']);

    $mail->isHTML(true);
    $mail->Subject='Enviado por '.$_POST['nombre'];
    $mail->Body='<h1 align=center>Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['email'].'<br>Asunto: '.$_POST['asunto'].'<br>Telefono: '.$_POST['telefono'].'<br>Mensaje: '.$_POST['mensaje'].'</h1>';
    
    if(!$mail->send()){
        $result="Algo esta mal, por favor inténtelo de nuevo.";
    }
    else{
        $result="Gracias ".$_POST['nombre']." por contactarnos, espera la respuesta!";
    }

}

?> <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Aldana Vilcabana</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/logo.png" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="css/plugins-css.css" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 header -->


 <header id="header" class="header default">
  <div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 xs-mb-10">
        <div class="topbar-call text-center text-md-left">
          <ul>
            <li><i class="fa fa-envelope-o theme-color"></i> <a href="mailto:aldana_vilcabana21@live.com.ar"> <span>aldana_vilcabana21@live.com.ar</span></a></li>
            <li><i class="fa fa-phone"></i> <a href="tel:+541164082659"> <span>+(54) 11 6408 2659 </span> </a> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="topbar-social text-center text-md-right">
          <ul>
            <li><a href=" https://wa.me/541164082659"><span class="fa fa-whatsapp"></span></a></li>
            <li><a href="https://www.facebook.com/aldanavilcabananovias"><span class="ti-facebook"></span></a></li>
            <li><a href="https://www.instagram.com/aldana_vilcabana/"><span class="ti-instagram"></span></a></li>
          </ul>
        </div>
      </div>
     </div>
  </div>
</div>
<!--=================================
 mega menu -->

 <div class="menu">
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12">
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="HomeAV.html"><img id="logo_img" src="images/logo-circular.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">
          <li><a href="Historia.html">Historia</a></li>
         <li><a href="javascript:void(0)">Tienda <i class="fa fa-angle-down fa-indicator"></i></a>
                <!-- drop down full width -->
                <div class="drop-down grid-col-12">
                    <!--grid row-->
                    <div class="grid-row">
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="NoviasAV.html">Novias</a></li>
                              <li><a href="ProductosAV.html">Prêt à Porter <span class="badge badge-primary">Ofertas</span></a></li>
                              <li><a href="AltaCosturaAV.html">Alta Costura y Eventos</a></li>
                            </ul>                     
                         </div>          
                    </div>
                </div>
            </li>
        </ul>
        <div class="search-cart">
          <div class="search">
            <a class="search-btn not_click" href="javascript:void(0);"></a>
              <div class="search-box not-click">
                 <form action="search.html" method="get">
                  <input type="text"  class="not-click form-control" name="search" placeholder="Search.." value="" >
                  <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                </form>
           </div>
          </div>
          <div class="shpping-cart">
           <a class="cart-btn" href="#"> <i class="fa fa-shopping-cart icon"></i></a>
            <div class="cart">
              <div class="cart-title">
                 <h6 class="uppercase mb-0">Shopping cart</h6>
              </div>
              <div class="cart-item">
                <div class="cart-image">
                  <img class="img-fluid" src="images/shop/01.jpg" alt="">
                </div>
              </div>
                <a class="button" href="shop-shopping-cart.html">Ver carrito</a>
                <a class="button black" href="shop-checkout.html">Revisa</a>
              </div>
            </div>
          </div>
        </div>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->




<div class="formu">
  <h1 class="titu">Contáctanos para presupuesto</h1>
<div class="content">
  <div class="contact-wrapper animated bounceInUp">
      <div class="contacto">

      <form action="" method="post" ENCTYPE="text/plain">
              <p>
                  <label >Nombre</label>
                  <input id="Cuadro" type="text" name="nombre" required>
              </p>
              <p>
                  <label>Email</label>
                  <input id="Cuadro" type="email" name="email" required>
              </p>
              <p>
                  <label>Teléfono</label>
                  <input  id="Cuadro" type="tel" name="telefono" required>
              </p>
              <p>
                  <label >Asunto </label>
                  <input id="Cuadro" type="text" name="asunto" required>
              </p>
              <p class="block">
                  <label>Mensaje</label>
                  <textarea id="Cuadro" name="mensaje" rows="3"></textarea>
              </p>
              <p class="block">
                  <button type="submit" name="submit">
                      <!-- <input value="Enviar Mensaje"> -->
                      <span>Enviar</span>
                  </button>
                  <h5 class="notifCorrecto"> <?= $result; ?> </h5>
              </p>
          </form>
      </div>
  </div>
</div>

</div>



<!--=================================
testimonial-->


<!--=================================
action box- -->

<!--=================================
action box- -->


<!--=================================
 footer -->

 <footer class="footer page-section-pt black-bg">
  <div class="container">
   <div class="row">
     <div class="col-lg-4 col-sm-6 xs-mb-30">
     <h6 class="text-white mb-30 mt-10 text-uppercase">Contactanos</h6>
     <ul class="addresss-info">
       <li><i class="fa fa-map-marker"></i> <a href="mapsto: Av. Hipólito Yrigoyen 1285 5to Piso Dpto 10, CABA" <span>Av. Hipólito Yrigoyen 1285 5to Piso Dpto 10, CABA</span> </a> </li>
         <li><i class="fa fa-phone"></i> <a href="tel:1164082659"> <span>+(54) 11 6408 2659 </span> </a> </li>
         <li><i class="fa fa-envelope-o"></i> <a href="mailto:aldana_vilcabana21@live.com.ar"> <span>aldana_vilcabana21@live.com.ar</span> </a> </li>
       </ul>
     </div>
     <div class="footer-widget mt-20">
       <div class="row">
         <div class="col-lg-6 col-md-6">
          <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#">L<sup>3</sup> </a> All Rights Reserved </p>
         </div>
         <div class="col-lg-6 col-md-6 text-left text-md-right">
           <div class="social-icons color-hover mt-10">
            <ul>
             <li class="social-facebook"><a href="https://www.facebook.com/aldanavilcabananovias"><i class="fa fa-facebook"></i></a></li>
             <li class="social-whatsapp"><a href="https://wa.me/541164082659"><i class="fa fa-whatsapp"></i></a></li>
             <li class="social-instagram"><a href="https://www.instagram.com/aldana_vilcabana/"><i class="fa fa-instagram"></i> </a></li>
            </ul>
          </div>
         </div>
       </div>
     </div>
   </div>
 </footer>
 

<!--=================================
 footer -->

</div>



<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- jquery -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- custom -->
<script src="js/custom.js"></script>



</body>
</html>
