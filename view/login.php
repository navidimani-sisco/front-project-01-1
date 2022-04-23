<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
    <title>ورود</title>
</head>
<body>
    <h1>ورود</h1>
    <form action="" method="post">
        <div>
            <label for="username">نام کاربری</label>
            <div class="form-control">
                <i class="fas fa-heart"></i>
                <input type="text" name="username" id="username" value = "test">
            </div>
            <div class="assistive-text">
                <p class="helper-text"></p>
                <p class="error-text"></p>
            </div>
        </div>
        <div>
            <label for="password">کلمه عبور</label>
            <div class="form-control">
                <input type="password" name="password" id="password">
                <i class="fas fa-eye"></i>
            </div>
            <div class="assistive-text">
                <p class="helper-text"></p>
                <p class="error-text"></p>
            </div>
        </div>
        <button type="submit" name = "submit" class="btn primary">ورود</button>
    </form>
</body>
</html>