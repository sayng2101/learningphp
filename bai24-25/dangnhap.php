<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bài 24-25</title>
</head>
<body>

    <div class="body">
    <div class="banner">
        <p>Vùng banner website</p>
    </div>
        <div class="menu">
            <a href="#" class="active">Menu</a>
            <a href="#">Trang chủ</a>
            <a href="index.php">Đăng kí</a>
            <a href="dangnhap.php">Đăng nhập</a>
        </div>
        <div class="form">
                <form action="login.php" method="post">
                    <h1>Thông tin đăng ký</h1>
                    Email
                    <input type="text" name="email"><br>
                    Password
                    <input type="password" name="password"><br>
                    <input type="checkbox" name="" value=""> Ghi nhớ tài khoản<br>
                    <input type="submit" name="" value="Đăng nhâp">
                    <input type="reset" name="" value="Làm lại">
                </form>
            </div>
    </div>
</body>
</html>