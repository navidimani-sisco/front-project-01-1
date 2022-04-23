<?php
    include 'settings.php';
    include 'lib/db.php';
    include 'utils/security.php';


if( isset( $_POST['submit'] ) ){ // اگر از فرم آمده
    // a. validate data
    // b. عملیات درج
    // 1. connect db
    $dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName, $dbCharset);
    // 2. create query
    $sql = "SELECT * FROM user
            WHERE username = ? AND password = ?";
    // 3. execute query
    $result = $dbc -> query( $sql, $_POST['username'], $_POST['password'] );
    
    if ($dbc -> numRows() > 0){ // چنین رکوردی وجود دارد
        echo 'ورود با موفقیت';
        $user = $dbc -> fetchArray();
        $uid = $user['id'];
        Authentication :: login( $uid );  // به خاطر سپاری ورود کاربر
        // redirect to dashboard
    }
    else{
        echo 'نام کاربری/کلمه عبور اشتباه است';
        include 'view/login.php';
    }
    // include a view

    // 4. close connection
    $dbc -> close();
}
else{
    // نمایش فرم
    include 'view/login.php';
}
?>