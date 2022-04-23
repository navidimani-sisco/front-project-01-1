<?php
    include 'settings.php';
    include 'lib/db.php';
    include 'utils/security.php';

if( ! Authorization :: checkRole('admin') ){
    // redirect 403;
}


if( isset( $_POST['submit']) ){ // اگر از فرم آمده
    // a. validate data
    $id = $_GET['id'];
    // b. عملیات درج
    // 1. connect db
    $dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName, $dbCharset);
    if($_POST['password'] == ''){
        // 2. create query
        $sql = "UPDATE user SET
                fullname = ?,
                username = ?,
                gender = ?
                WHERE id = ?";
        // 3. execute query
        $result = $dbc -> query( $sql, $_POST['fullname'], $_POST['username'], $_POST['gender'], $_GET['id'] );
    }
    else{
        // 2. create query
        $sql = "UPDATE user SET
                fullname = ?,
                username = ?,
                password = ?,
                gender = ?
                WHERE id = ?";
        // 3. execute query
        $result = $dbc -> query( $sql, $_POST['fullname'], $_POST['username'], $_POST['password'], $_POST['gender'], $_GET['id'] );
    }
    // 4. close connection
    $dbc -> close();

    // include a view
    echo 'با موفقیت ویرایش شد';
}
else{
    // دریافت اطلاعات فرم
    
    // 1. connect db
    $dbc = new DB( $dbHost, $dbUser, $dbPass, $dbName, $dbCharset);
    // 2. create query
    $sql = "SELECT * FROM user
            WHERE id = ?";
    // 3. execute query
    $result = $dbc -> query( $sql, $_GET['id'] );
    $row = $result -> fetchArray();
    // 4. close connection
    $dbc -> close();

    // نمایش فرم
    //var_dump( $row );
    include 'view/edit_user.php';
}
?>