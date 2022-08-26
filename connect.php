<?php
    $DB_NAME = "u885321185_ecommerce";
    $DB_USER = "u885321185_throw_dev";
    $DB_HOST = "localhost";
    $DB_PASS = "Tr4n51lv4n14.db";

    $connect = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    $sql_products = "SELECT * FROM products";
    $result_products = mysqli_query($connect, $sql_products);

    $sql_categories = "SELECT * FROM categories";
    $result_categories = mysqli_query($connect, $sql_categories);
    
    $sql_events = "SELECT * FROM events";
    $result_events = mysqli_query($connect, $sql_events);

    $sql_pinateria = "SELECT * FROM products WHERE category = 'globos'";
    $result_pinateria = mysqli_query($connect, $sql_pinateria);
?> 