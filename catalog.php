<?php
    include 'settings.php';
    include 'lib/db.php';
    include 'utils/security.php';


    // a. validate data
    // b. عملیات سلکت
    // 1. connect db
    $dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName, $dbCharset);
    // 2. SELECT Query
    $sql = "SELECT * FROM product
            ORDER BY id DESC
            LIMIT 15";
    // 3. execute query
    $result = $dbc -> query( $sql );
    $products = $dbc -> fetchAll();
    // var_dump($products);
    // 4. close connection
    $dbc -> close();

    // include a view
    include 'view/show_products.php'
?>