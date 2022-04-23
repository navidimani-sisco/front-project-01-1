<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش کاربر</title>
    <style>
        body{
            direction:  rtl;
            text-align: right;
        }
        label{
            /* display: block; */
        }
        .form-input-component{
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <h1>ویرایش کاربر</h1>
    <form action="" method="post">
        <div class = "form-input-component">
            <label for="fullname">نام کامل</label>
            <input type="text" name="fullname" id="fullname" value = "<?php if(isset($row['fullname']) ) echo $row['fullname']; ?>">
        </div>
        <div class = "form-input-component">
            <label for="username">نام کاربری</label>
            <input type="text" name="username" id="username" value = "<?php if(isset($row['username']) ) echo $row['username']; ?>">
        </div>
        <div class = "form-input-component">
            <label for="password">کلمه عبور</label>
            <input type="password" name="password" id="password">
        </div>
        <div class = "form-input-component">
            جنسیت: <br>
            <input type="radio" name="gender" id="male" value="male" <?php if( isset($row['gender']) && $row['gender'] == 'male' ) echo 'checked';?> >
            <label for="male">مرد</label>
            <br>
            <input type="radio" name="gender" id="female" value="female" <?php if( isset($row['gender']) && $row['gender'] == 'female' ) echo 'checked';?>>
            <label for="female">زن</label>
        </div>
        <button type="submit" name = "submit">ویرایش</button>
    </form>
</body>
</html>