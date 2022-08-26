<?php
    //Conexion a la base de datos
    include("connect.php");
    //Recibir los datos y almacenarlos en variables
    copy($_FILES['image']['tmp_name'], "bucket/".$_FILES['image']['name']);
    $imagepath = "bucket/".$_FILES['image']['name'];
    $name = $_POST["name"];
    $category = $_POST["category"];
    $color = $_POST["color"];
    $price = $_POST["price"];
    $event = $_POST["event"];
    //Preparar la consulta
    $sql = "INSERT INTO products (name, category, color, image, price, event) 
    VALUES ('$name', '$category', '$color', '$imagepath', '$price', '$event')";
    //Ejecutar la consulta
    $result = mysqli_query($connect, $sql);
    //Redireccionar a la pagina
    header("Location: admin.php");
?>