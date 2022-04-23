<?php
    include 'settings.php';
    include 'lib/db.php';


if( isset( $_POST['submit'] ) ){ // اگر از فرم آمده
    // a. validate data
    // b. عملیات درج
    // 1. connect db
    $dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName, $dbCharset);
    // 2. create query
    $sql = "INSERT INTO user(fullname, username, password, gender) VALUES(?, ?, ?, ?)";
    // 3. execute query
    $result = $dbc -> query( $sql, $_POST['fullname'], $_POST['username'], $_POST['password'] , $_POST['gender'] );
    // 4. close connection
    $dbc -> close();

    // include a view
    echo 'با موفقیت درج شد';
}
else{
    // نمایش فرم
    include 'view/add_user.php';
}
?>