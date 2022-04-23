<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>
</head>
<body>
    <h1>ثبت نام</h1>
    <form action="" method="post">
        <div>
            <label for="fullname">نام کامل</label>
            <input type="text" name="fullname" id="fullname">
        </div>
        <div>
            <label for="username">نام کاربری</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">کلمه عبور</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            جنسیت: <br>
            <input type="radio" name="gender" id="male" value="male" checked>
            <label for="male">مرد</label>
            <br>
            <input type="radio" name="gender" id="female" value = "female">
            <label for="female">زن</label>
        </div>
        <button type="submit" name = "submit">ثبت نام</button>
    </form>
</body>
</html>