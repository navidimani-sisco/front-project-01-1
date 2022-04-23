<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>محصولات</title>
    <style>
    </style>
</head>
<body>
    <h1>محصولات</h1>
    <div class="grid grid-4">
    <?php
        if( count( $products ) == 0 ){
            echo '<p>محصولی یافت نشد</p>';
        }
        else{
            foreach( $products as $product ){
                // var_dump($product);               
                include 'template/product-card.php';
            }
        }
    ?>
    </div>
</body>
</html>