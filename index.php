<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="E-commerce san victo">
    <meta name="keywords" content="san victo, empaques, caja regalo, detalles">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/img/static/favicon.png">
    <title>San Victo | Inicio</title>
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
                            <li class="active"><a href="#about"><i class="fa fa-gift page"></i> Quienes <br> somos</a></li>
                            <li class="active"><a href="./products"><i class="fa fa-gift page"></i> Productos <br> exp. social</a></li>
                            <li class="active"><a href="./floristeria"><i class="fa fa-gift page"></i> Productos <br> para floristería</a></li>
                            <li class="active"><a href="./pinateria"><i class="fa fa-gift page"></i> Productos <br> para piñatería</a></li>
                            <li class="active"><a href="./joyeria"><i class="fa fa-gift page"></i> Productos <br> para joyería</a></li>
                            
                            <li class="active"><a href="./signin"><i class="fa fa-gift page"></i> login</a></li> 
                            
                            <!-- <li class="active"><a href="./Cata_amor_amistad.php"><i class="fa fa-gift page"></i>catalogo</a></li> -->
                            
                            
                            
                            
                            
                            
                            
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
    <!-- Hero Section Begin -->
    <section class="hero  mt-4 d-none d-sm-none d-md-block d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="header__logo">
                            <a><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <video src="img/hero/banner.mp4" class="hero__item set-bg" loop autoplay muted poster="img/hero/banner.jpg"></video>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.png">
                            <h5><a href="./products">Tarjetas</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.png">
                            <h5><a href="./products">Pines</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.png">
                            <h5><a href="./products">Globos</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.png">
                            <h5><a href="./products">Caja ventana</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.png">
                            <h5><a href="./products">Caja tapa mediana</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-6.png">
                            <h5><a href="./products">Caja tapa grande</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-7.png">
                            <h5><a href="./products">Caja picnic</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-8.png">
                            <h5><a href="./products">Caja mug</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-9.png">
                            <h5><a href="./products">Caja manija</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-10.png">
                            <h5><a href="./products">Caja maletin</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-11.png">
                            <h5><a href="./products">Caja lonchera</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-12.png">
                            <h5><a href="./products">Caja lata</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-13.png">
                            <h5><a href="./products">Caja cofre</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-14.png">
                            <h5><a href="./products">Caja ancheta</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-15.png">
                            <h5><a href="./products">Cajas bolsa</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-16.png">
                            <h5><a href="./products">Bandejas</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-17.png">
                            <h5><a href="./products">Baldes</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Productos destacados</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Todos</li>
                            <li data-filter="*">Piñatería</li><!-- 
                            <li data-filter=".baldes">Baldes</li>
                            <li data-filter=".caja">Caja tapa</li>
                            <li data-filter=".ofertas">Ofertas</li> -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row featured__filter">
                            <?php while($row_pinateria = mysqli_fetch_assoc($result_pinateria)){ ?> 
                            <div class="col-lg-3 col-md-3 col-sm-6 mix 
                             <?php echo $row_pinateria['category']; ?> 
                             <?php echo $row_pinateria['subcategory']; ?>
                             <?php echo $row_pinateria['color']; ?>
                             <?php echo $row_pinateria['event']; ?>">
                                <div class="featured__item">
                                    <div class="featured__item__pic set-bg" data-setbg="<?php echo $row_pinateria['image']; ?>">
                                    <ul class="featured__item__pic__hover">
                                        <li><a title="Eliminar" onclick="removeToCart('<?php echo $row_pinateria['id']; ?>')"><i class="fa fa-minus"></i></a></li>
                                        <li><a id="count-product-<?php echo $row_pinateria['id']; ?>">0
                                       <!--  <script>
                                            const prod<?php // echo $row_products['id']; ?> = document.getElementById("count-product-<?php echo $row_pinateria['id']; ?>");
                                            /* count product in cart */
                                            
                                            var cart = JSON.parse(localStorage.getItem('cart'));

                                            const groupByCategoryUnit = cart.reduce((group, product) => {
                                            const { name } = product;
                                            group[name] = group[name] ?? [];
                                            group[name].push(product);
                                            return group;
                                            }, {});

                                            /* get lenght product by product */
                                            const productLenght = Object.keys(groupByCategoryUnit).map(key => {
                                            return groupByCategoryUnit[key].length;
                                            });
                                             /* end count product in cart */

                                            /* assign for cicle innerHTML */
                                            console.log(productLenght);
                                            /* ciclo for */
                                            for (let i = 0; i < productLenght.length; i++) {
                                                
                                            prod<?php // echo $row_products['id']; ?>.innerHTML = productLenght[i];
                                                
                                            }
                                            /* end ciclo for */
                                        </script> -->
                                        </a></li>
                                        <li><a title="Agregar" onclick="addToCart('<?php echo $row_pinateria['id']; ?>', '<?php echo $row_pinateria['name']; ?>', '<?php echo $row_pinateria['price']; ?>')"><i class="fa fa-plus"></i></a></li>
                                    </ul>
                                    </div>
                                    <div class="featured__item__text">
                                        <h6><a href="#"><?php echo $row_pinateria['name']; ?> <span style="text-decoration: underline">Pack X3 unidades</span></a></h6>
                                        <h5>$<?php echo str_replace(",", ".", number_format($row_pinateria['price'])); ?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?> 
                        </div>
                        <?php mysqli_close($connect); ?>
                    </div>







        </div>
    </section>
    <!-- Featured Section End -->





    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Fechas especiales</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-4.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Día de la mujer</span>
                                        <h6>Colecci&oacute;n en Marzo</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-7.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Día de la madre</span>
                                        <h6>Colecci&oacute;n en Mayo</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-8.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Día del padre</span>
                                        <h6>Colecci&oacute;n en Junio</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Amor y amistad</span>
                                        <h6>Colecci&oacute;n en septiembre</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Halloween</span>
                                        <h6>Colecci&oacute;n en Octubre</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Navidad</span>
                                        <h6>Colecci&oacute;n en Diciembre</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Nuevos productos</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-6.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Servilletas</span>
                                        <h6>Nuevo</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-9.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Frascos tematicos</span>
                                        <h6>Nuevo</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-10.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Alcancias</span>
                                        <h6>Nuevo</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-11.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Caja cofre</span>
                                        <h6>Nuevo</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-12.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Caja cofre tapa</span>
                                        <h6>Nuevo</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-13.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Globos</span>
                                        <h6>Nuevo</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Mas vendidos</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-14.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Caja manija</span>
                                        <h6>Top ventas</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-15.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Baldes</span>
                                        <h6>Top ventas</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-16.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Caja mediana</span>
                                        <h6>Top ventas</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-17.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Caja bolsa</span>
                                        <h6>Top ventas</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-18.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Caja grande</span>
                                        <h6>Top ventas</h6>
                                    </div>
                                </a>
                                <a href="/products" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-19.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <span>Bandejas</span>
                                        <h6>Top ventas</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer spad" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            
                            <a><img src="img/logo.png"  alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1" >
                    <div class="footer__widget">
                        
                        
          
                        
                        <h6>Contacto</h6>
                        <p>ventas@sanvicto.com <br />
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
                        <p>Somos distribuidores de empaques para floristeria, almacenes de expresion social, joyeria, relojeria y productos de piñateria.  <br />
                        Envios a nivel nacional
                        </p>
                        <div class="footer__widget__social d-none d-sm-none d-md-block d-lg-block">
                           <a href=""><i class="fa fa-user-circle user" ></i></a>
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
</body>
</html>