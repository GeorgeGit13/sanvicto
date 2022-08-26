<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="E-commerce san victo">
    <meta name="keywords" content="san victo, empaques, caja regalo, detalles">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/img/static/favicon.png">
    <title>San Victo | Pago</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="/index">Inicio</a></li>
                <li><a href="/products">Productos</a></li>
                <li><a href="/checkout">Mis compras</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a target="_blank" href="https://www.facebook.com/SanVictoEmpaques/"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com/sanvictoempaques/"><i class="fa fa-instagram"></i></a>
            <a target="_blank" href="https://twitter.com/SanvictoC"><i class="fa fa-twitter"></i></a>
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=573192866911&text&app_absent=0"><i class="fa fa-whatsapp"></i></a>
        </div>
    </div>
    <!-- Humberger End -->
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                <nav class="header__menu">
                        <ul>
                            <li><a href="./index"><i class="fa fa-home page"></i> Inicio</a></li>
                            <li class="active"><a href="./about"><i class="fa fa-gift page"></i> Quienes <br> somos</a></li>
                            <li class="active"><a href="./products"><i class="fa fa-gift page"></i> Productos <br> exp. social</a></li>
                            <li class="active"><a href="./floristeria"><i class="fa fa-gift page"></i> Productos <br> para floristería</a></li>
                            <li class="active"><a href="./pinateria"><i class="fa fa-gift page"></i> Productos <br> para piñatería</a></li>
                            <li class="active"><a href="./joyeria"><i class="fa fa-gift page"></i> Productos <br> para joyería</a></li>
                           <!--  <li><a target="_blank" href="https://www.facebook.com/SanVictoEmpaques/"><i class="fa fa-facebook facebook"></i> Facebook</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/sanvictoempaques/"><i class="fa fa-instagram instagram"></i> Instagram</a></li>
                            <li><a target="_blank" href="https://twitter.com/SanvictoC"><i class="fa fa-twitter twitter"></i> Twitter</a></li>
                            <li><a target="_blank" href="https://api.whatsapp.com/send/?phone=573192866911&text&app_absent=0"><i class="fa fa-whatsapp whatsapp"></i> WhatsApp</a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <li><a href="./checkout"><i class="fa fa-shopping-bag"></i> 
                            <span id="count-cart"></span>
                        </a></li>
                        </ul>
                        <div class="header__cart__price">$<span id="total-cart">$0</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Realizar pedido</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Detalles de la compra</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6" id="1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nombre<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Apellido<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Ciudad<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Direccion<span>*</span></p>
                                <input type="text" class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Telefono<span>*</span></p>
                                <input type="number">
                            </div>
                            <div class="checkout__input">
                                <p>Correo<span>*</span></p>
                                <input type="email">
                            </div>
                            <div class="checkout__input">
                                <p>Observaciones</p>
                                <input type="text"
                                    placeholder="Alguna nota adicional?">
                            </div>
                        </div>
                        <div  class="col-lg-8 col-md-6" style="display: none" id="2">
                            <img width="500" src="https://s3.amazonaws.com/nequi-wp-colombia/wp-content/app/wp-content/uploads/2019/01/Sticker.png" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Orden</h4>
                                <div class="checkout__order__products">Productos <span>Total</span></div>
                                <ul id="ticket">
                                </ul>
                                <hr />
                                <div class="checkout__order__total">Total <span id="ticket-total"></span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Confirmar pedido
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="" class="site-btn" onclick="pay()">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a><img src="img/logo.png"  alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Contacto</h6>
                        <p>ventas@sanvicto.com.co <br />
                        +57 319 286 69 11
                        </p>
                        <div class="footer__widget__social">
                            <a href="https://www.facebook.com/SanVictoEmpaques/" target="_blank"><i class="fa fa-facebook facebook"></i></a>
                            <a href="https://www.instagram.com/sanvictoempaques/" target="_blank"><i class="fa fa-instagram instagram"></i></a>
                            <a href="https://twitter.com/SanvictoC" target="_blank"><i class="fa fa-twitter twitter"></i></a>
                            <a href="https://api.whatsapp.com/send/?phone=573192866911&text&app_absent=0" target="_blank"><i class="fa fa-whatsapp whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>San Victo Empaques</h6>
                        <p>Distribuidores al por mayor de empaques para toda ocasión.</p>
                        <div class="footer__widget__social d-none d-sm-none d-md-block d-lg-block">
                           <a href=""><i class="fa fa-user-circle user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    
    <script src="js/cart.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        function pay(){
        document.getElementById('2').style.display = 'block';
        document.getElementById('1').style.display = 'none';
    }
    </script>
</body>

</html>