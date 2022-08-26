<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/img/static/favicon.png">
    <title>San Victo | Admin</title>
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
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 offset-lg-10">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index">Cerrar sesión</a></li>
                        </ul>
                    </nav>
                </div>
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
                        <h2>Panel de control</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title product__discount__title">
                        <h2>Agregar productos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="image__place product__details__pic__item--large"
                                 src="img/static/placeholder.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="send.php" method="post" enctype="multipart/form-data">
                    <div class="product__details__text">
                        <h3>Datos del producto</h3>
                        <div class="checkout__input">
                            <p>Nombre<span>*</span></p>
                            <input required type="text" name="name" autocomplete="off" placeholder="Bandeja multicolor 1">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Categoria<span>*</span></p>
                                <select class="custom-select" required type="text" name="category" autocomplete="off">
                                    <option value="none">Seleccione una categoria</option>
                                    <?php while($row_categories = mysqli_fetch_assoc($result_categories)){ ?> 
                                    <option value="<?php echo $row_categories['category']; ?>">
                                    <?php echo ucfirst(str_replace("_", " ", $row_categories['category'])); ?>
                                    </option>
                                    <?php } ?> 
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Color<span>*</span></p>
                                <select class="custom-select" required name="color">
                                    <option value="none">Seleccione un color</option>
                                    <option value="none">No aplica</option>
                                    <option value="amarillo">Amarillo</option>
                                    <option value="rojo">Rojo</option>
                                    <option value="negro">Negro</option>
                                    <option value="azul">Azul</option>
                                    <option value="verde">Verde</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Evento<span>*</span></p>
                                <select class="custom-select" required name="event">
                                    <option value="none">Seleccione un evento</option>
                                    <option value="none">No aplica</option>
                                    <?php while($row_events = mysqli_fetch_assoc($result_events)){ ?>
                                    <option value="<?php echo $row_events['event']; ?>">
                                    <?php echo ucfirst(str_replace("_", " ", $row_events['event'])); ?>
                                    </option>
                                    <?php } ?> 
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Precio<span>*</span></p>
                                <input required type="text" name="price" placeholder="10000">
                            </div>   
                        </div>
                    </div>
                        <div class="checkout__input">
                            <p>Imagen<span>*</span></p>
                            <label class="input-personalizado form-upload">
                            <span>Seleccione una imagen</span>
                            <input class="input-file" required type="file" name="image">
                            </label>
                        </div>
                        <button type="submit" class="primary-btn">Agregar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
    <div class="container mb-5" >
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title product__discount__title">
                    <h2>Administrar productos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Item</th>
                                <th>Categoria</th>
                                <th>Color</th>
                                <th>Evento</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row_products = mysqli_fetch_assoc($result_products)){ ?> 
                            <tr>
                                <td class="shoping__cart__item">
                                    <img width="50" src="<?php echo $row_products['image']; ?>" alt="<?php echo $row_products['image']; ?>">
                                    <h5><?php echo $row_products['name']; ?></h5>
                                </td>
                                <td>
                                <select class="custom-select" required type="text" name="category" autocomplete="off">
                                    <option value="<?php echo $row_categories['category']; ?>"><?php echo ucfirst(str_replace("_", " ", $row_products['category'])); ?></option>
                                    <option value="">Baldes</option>
                                    <option value="">Bandejas</option>
                                    <option value="">Caja ancheta</option>
                                    <option value="">Caja bolsa</option>
                                    <option value="">Caja cofre</option>
                                    <option value="">Caja lata</option>
                                    <option value="">Caja lonchera</option>
                                    <option value="">Caja maletin</option>
                                    <option value="">Caja manija</option>
                                    <option value="">Caja mug</option>
                                    <option value="">Caja picnic</option>
                                    <option value="">Caja tapa grande</option>
                                    <option value="">Caja tapa mediana</option>
                                    <option value="">Caja ventana</option>
                                    <option value="">Globos</option>
                                    <option value="">Pines</option>
                                    <option value="">Tarjetas</option>
                                </select>    
                                </td>
                                <td>
                                <select class="custom-select" required type="text" name="color" autocomplete="off">
                                    <option value="<?php echo $row_products['color']; ?>"><?php echo ucfirst($row_products['color']); ?></option>
                                    <option value="">No aplica</option>
                                    <option value="">Amarillo</option>
                                    <option value="">Rojo</option>
                                    <option value="">Negro</option>
                                    <option value="">Azul</option>
                                    <option value="">Verde</option>
                                </select>   
                                </td>
                                <td>
                                <select class="custom-select" required type="text" name="event" autocomplete="off">
                                    <option value="<?php echo $row_products['event']; ?>"><?php echo ucfirst(str_replace("_", " ", $row_products['event'])); ?></option>
                                    <option value="">No aplica</option>
                                    <option value="">Dia de la mujer</option>
                                    <option value="">Dia del hombre</option>
                                    <option value="">Dia de la madre</option>
                                    <option value="">Dia del padre</option>
                                    <option value="">Amor y amistad</option>
                                    <option value="">Halloween</option>
                                    <option value="">Navidad</option>
                                    <option value="">Cumpleaños</option>
                                </select>       
                            </td>
                                <td class="shoping__cart__total">
                                <div class="checkout__input" style="margin-top: 22px;">
                                <input style="height: 40px" required type="text" name="price" value="<?php echo $row_products['price']; ?>" placeholder="$<?php echo $row_products['price']; ?>">
                                </div>
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon__admin"><i class="fa fa-close" style="color: red"></i></span>
                                    <span class="icon__admin"><i class="fa fa-check" style="color: green"></i></span>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section End -->
    <script>
    	const $ = document.querySelector.bind(document);
        const previewImg = $('.image__place');
        const fileChooser = $('.input-file');
        fileChooser.onchange = e => {
            const fileToUpload = e.target.files.item(0);
            const reader = new FileReader();
            reader.onload = e => previewImg.src = e.target.result;
            reader.readAsDataURL(fileToUpload);
        };
    </script>
    <!-- Js Plugins -->
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