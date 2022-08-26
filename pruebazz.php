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
    <title>San Victo | Productos</title>
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
                            <li class="active"><a href=""><i class="fa fa-gift page"></i> Quienes <br> somos</a></li>
                            <li class="active"><a href="./products"><i class="fa fa-gift page"></i> Productos <br> exp. social</a></li>
                            <li class="active"><a href=""><i class="fa fa-gift page"></i> Productos <br> para floristería</a></li>
                            <li class="active"><a href=""><i class="fa fa-gift page"></i> Productos <br> para piñatería</a></li>
                            <li class="active"><a href=""><i class="fa fa-gift page"></i> Productos <br> para joyería</a></li>
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
    <section class="breadcrumb-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>San Victo Empaques</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                       
                        <div class="sidebar__item">
                            <h4>Categorias</h4>
                            <ul>
                                <li class="c-pointer"><a data-filter="*">🏷 Globos</a></li>
                                <!-- <?php while($row_categories = mysqli_fetch_assoc($result_categories)){ ?> 
                                <li><a data-filter=".<?php echo $row_categories['category']; ?>">
                                🏷 <?php echo ucfirst(str_replace("_", " ", $row_categories['category'])); ?>
                                </a></li>
                                <?php } ?>  -->
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Eventos</h4>
                            <ul>
                                <li><a data-filter="*">🪅 Todos</a></li>
                               <!--  <?php while($row_events = mysqli_fetch_assoc($result_events)){ ?> 
                                <li><a data-filter=".<?php echo $row_events['event']; ?>">
                                🪅 <?php echo ucfirst(str_replace("_", " ", $row_events['event'])); ?>
                                </a></li>    
                                <?php } ?>   -->
                            </ul>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Color</h4>
                            <div class="sidebar__item__color sidebar__item__color--white" data-filter="*">
                                <label for="white">
                                    Todos
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <!-- <div class="sidebar__item__color sidebar__item__color--gray" data-filter=".amarillo">
                                <label for="gray">
                                    Amarillo
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red" data-filter=".rojo">
                                <label for="red">
                                    Rojo
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black" data-filter=".negro">
                                <label for="black">
                                    Negro
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue" data-filter=".azul">
                                <label for="blue">
                                    Azul
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green" data-filter=".verde">
                                <label for="green">
                                    Verde
                                    <input type="radio" id="green">
                                </label>
                            </div> -->
                        </div>
                    </div>
                </div>
                <section class="col-lg-9 col-md-7">
                    <div class="container">
                      <!--   <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title product__discount__title">
                                    <h2>Productos</h2>
                                </div>
                                <div class="featured__controls">
                                    <ul>
                                        <li data-filter=".ancheta-pequena">Ancheta pequeña</li>
                                        <li data-filter=".ancheta-mediana-baja">Ancheta mediana baja</li>
                                        <li data-filter=".ancheta-mediana-alta">Ancheta mediana alta</li>
                                        <li data-filter=".ancheta-grande">Ancheta grande</li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="row featured__filter">
                            <?php while($row_pinateria = mysqli_fetch_assoc($result_pinateria)){ ?> 
                            <div class="col-lg-4 col-md-4 col-sm-6 mix 
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
                </section>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
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
                           <a href="/signin"><i class="fa fa-user-circle user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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