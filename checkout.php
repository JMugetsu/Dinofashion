<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>check out</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="img/dino/logo.jpeg">
    <script  src = "https://kit.fontawesome.com/3e26a1e3ce.js " crossorigin = "anónimo" ></script>

  <!-- CSS here -->
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/owl.carousel.min.css">
      <link rel="stylesheet" href="./css/flaticon.css">
      <link rel="stylesheet" href="./css/slicknav.css">
      <link rel="stylesheet" href="./css/animate.min.css">
      <link rel="stylesheet" href="./css/magnific-popup.css">
      <link rel="stylesheet" href="./css/fontawesome-all.min.css">
      <link rel="stylesheet" href="./css/themify-icons.css">
      <link rel="stylesheet" href="./css/slick.css">
      <link rel="stylesheet" href="./css/nice-select.css">
      <link rel="stylesheet" href="./css/style.css">
      <link rel="stylesheet" href="./css/layout.css">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
          <div class="preloader-inner position-relative">
              <div class="preloader-circle"></div>
              <div class="preloader-img pere-text">
                  <img src="img/dino/logo.jpeg" alt="">
              </div>
          </div>
      </div>
  </div>
  <!-- Preloader Start -->
  <header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
            
           <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                          <div class="logo" >
                            <a>DINO<span>FASHION</span></a>
                        </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>                                                
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="Catagori.php">Catagorias</a></li>
                                        <li class="hot"><a href="#">
                                            Más reciente</a>
                                            <ul class="submenu">
                                                <li><a href="product_list.php"> Lista de productos</a></li>
                                                <li><a href="single-product.php"> Detalles de producto</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.php">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="single-blog.php">Detalles del blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="login.php">Registrate</a></li>
                                                <li><a href="cart.php">Tarjet</a></li>
                                                <li><a href="about.php">Sobre nosotros</a></li>
                                                <li><a href="cart.php">Carrito de compras</a></li>
                                                <li><a href="checkout.php">Pago del producto
                                                </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contactanos</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> 
                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                <li class="d-none d-xl-block">
                                    <div class="form-box f-right ">
                                        <input type="text" name="Search" placeholder="Buscar Productos">
                                        <div class="search-icon">
                                            <i class="fas fa-search special-tag"></i>
                                        </div>
                                    </div>
                                 </li>
                                <li class=" d-none d-xl-block">
                                    <div class="favorit-items">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-card">
                                        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>
                               <li class="d-none d-lg-block"> <a href="login.php" class="btn header-btn">Iniciar sesión</a></li>
                            </ul>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>

  <!-- slider Area Start-->
  <div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="./img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Verificar</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- slider Area End-->

  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">
      <div class="returning_customer">
        <div class="check_title">
          <h2>
            ¿Soy Cliente?

            <a href="login.php">Haga clic aquí para ingresar</a>
          </h2>
        </div>
        <p>
          Si ha comprado con nosotros antes, por favor ingrese sus datos en los
          recuadros a continuación. Si es un cliente nuevo, por favor vaya a la
          Sección de facturación y envío.
        </p>
        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
          <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="name" name="name" value=" " />
            <span class="placeholder" data-placeholder="Username or Email"></span>
          </div>
          <div class="col-md-6 form-group p_star">
            <input type="password" class="form-control" id="password" name="password" value="" />
            <span class="placeholder" data-placeholder="Password"></span>
          </div>
          <div class="col-md-12 form-group">
            <button type="submit" value="submit" class="btn_3">
              iniciar sesión
            </button>
            <div class="creat_account">
              <input type="checkbox" id="f-option" name="selector" />
              <label for="f-option">Recordarme</label>
            </div>
            <a class="lost_pass" href="#">¿Perdiste tu contraseña?</a>
          </div>
        </form>
      </div>
      <div class="cupon_area">
        <div class="check_title">
          <h2>
            ¿Tiene un cupón?
            <a href="#">Haga clic aquí para ingresar su código</a>
          </h2>
        </div>
        <input type="text" placeholder="Enter coupon code" />
        <a class="tp_btn" href="#">Aplicar cupón</a>
      </div>
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Detalles de facturación</h3>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" name="name" />
                <span class="placeholder" data-placeholder="Primer Nombre"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" name="name" />
                <span class="placeholder" data-placeholder="Segundo Nombre"></span>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="company" name="company" placeholder="Company name" />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" />
                <span class="placeholder" data-placeholder="Numero de telefono"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="compemailany" />
                <span class="placeholder" data-placeholder="Correo Electronico"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select">
                  <option value="1">Nicaragua</option>
                  <option value="2">EEUU</option>
                  <option value="4">España</option>
                </select>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="add1" />
                <span class="placeholder" data-placeholder="Adress line 01"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add2" name="add2" />
                <span class="placeholder" data-placeholder="Adress line  02"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="city" name="city" />
                <span class="placeholder" data-placeholder="Pueblo/Ciudad"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select">
                  <option value="1">District</option>
                  <option value="2">District</option>
                  <option value="4">District</option>
                </select>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Código postal/ZIP" />
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <input type="checkbox" id="f-option2" name="selector" />
                  <label for="f-option2">¿Crea una cuenta?</label>
                </div>
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <h3>Detalles de envío</h3>
                  <input type="checkbox" id="f-option3" name="selector" />
                  <label for="f-option3">¿Envia a una direccion diferente?</label>
                </div>
                <textarea class="form-control" name="message" id="message" rows="1"
                  placeholder="pedidos"></textarea>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Su pedido</h2>
              <ul class="list">
                <li>
                  <a href="#">Producto
                    <span>Total</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Blackberry
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Tomatoes
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Brocoli
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
              </ul>
              <ul class="list list_2">
                <li>
                  <a href="#">Subtotal
                    <span>$2160.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Shipping
                    <span>Flat rate: $50.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Total
                    <span>$2210.00</span>
                  </a>
                </li>
              </ul>
              <div class="payment_item">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector" />
                  <label for="f-option5">Cheque pagos</label>
                  <div class="check"></div>
                </div>
                <p>
                  Envíe un cheque a nombre de la tienda, calle de la tienda, ciudad de la tienda, estado/condado de la tienda, código postal de la tienda.
                </p>
              </div>
              <div class="payment_item active">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="selector" />
                  <label for="f-option6">Paypal </label>
                  <img src="img/product/single-product/card.jpg" alt="" />
                  <div class="check"></div>
                </div>
                <p>
                  Envíe un cheque a nombre de la tienda, calle de la tienda, ciudad de la tienda,
                  Estado/condado de la tienda, código postal de la tienda.
                </p>
              </div>
              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" />
                <label for="f-option4">He leído y acepto los </label>
                <a href="#">Términos y condiciones*</a>
              </div>
              <a class="btn_3" href="#">Proceder</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->


  <footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding2">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                   <div class="single-footer-caption mb-50">
                     <div class="single-footer-caption mb-30">
                          <!-- logo -->
                         <div class="footer-logo">
                             <a href="index.php"><img src="./img/logo/logo2_footer.png" alt=""></a>
                         </div>
                         <div class="footer-tittle">
                             <div class="footer-pera">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                            </div>
                         </div>
                     </div>
                   </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Offers & Discounts</a></li>
                                <li><a href="#"> Get Coupon</a></li>
                                <li><a href="#">  Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>New Products</h4>
                            <ul>
                                <li><a href="#">Woman Cloth</a></li>
                                <li><a href="#">Fashion Accessories</a></li>
                                <li><a href="#"> Man Accessories</a></li>
                                <li><a href="#"> Rubber made Toys</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Support</h4>
                            <ul>
                             <li><a href="#">Frequently Asked Questions</a></li>
                             <li><a href="#">Terms & Conditions</a></li>
                             <li><a href="#">Privacy Policy</a></li>
                             <li><a href="#">Privacy Policy</a></li>
                             <li><a href="#">Report a Payment Issue</a></li>
                         </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer bottom -->
            <div class="row">
             <div class="col-xl-7 col-lg-7 col-md-7">
                 <div class="footer-copy-right">
                     <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                   </div>
             </div>
              <div class="col-xl-5 col-lg-5 col-md-5">
                 <div class="footer-copy-right f-right">
                     <!-- social -->
                     <div class="footer-social">
                         <a href="#"><i class="fab fa-twitter"></i></a>
                         <a href="#"><i class="fab fa-facebook-f"></i></a>
                         <a href="#"><i class="fab fa-behance"></i></a>
                         <a href="#"><i class="fas fa-globe"></i></a>
                     </div>
                 </div>
             </div>
         </div>
        </div>
    </div>

    <!-- Footer End-->
</footer>
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
    <script src="././js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="././js/vendor/jquery-1.12.4.min.js"></script>
    <script src="././js/popper.min.js"></script>
    <script src="././js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="././js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="././js/owl.carousel.min.js"></script>
    <script src="././js/slick.min.js"></script>

		<!-- One Page, Animated-HeadLin -->
    <script src="././js/wow.min.js"></script>
		<script src="././js/animated.headline.js"></script>
    <script src="././js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
    <script src="././js/jquery.scrollUp.min.js"></script>
    <script src="././js/jquery.nice-select.min.js"></script>
    <script src="././js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="././js/contact.js"></script>
    <script src="././js/jquery.form.js"></script>
    <script src="././js/jquery.validate.min.js"></script>
    <script src="././js/mail-script.js"></script>
    <script src="././js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
    <script src="././js/plugins.js"></script>
    <script src="././js/main.js"></script>
      
</body>

</html>