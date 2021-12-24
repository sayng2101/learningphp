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
            <a href="#">Đăng kí</a>
            <a href="dangnhap.php">Đăng nhập</a>
        </div>
        <div class="form">
                <form action="xldangky.php" method="post">
                    <h1>Thông tin đăng ký</h1>
                    <p>Thông tin tài khoản</p>
                    Email
                    <input type="email" name="email"><br>
                    Password
                    <input type="password" name="password"><br>
                    Nhập lại password
                    <input type="password" name="password-g"><br>
                    <br><p>Thông tin cá nhân</p>
                    Họ và tên
                    <input type="text" name="ten"><br>
                    Địa chỉ
                    <input type="text" name="diachi"><br>
                    Điện thoại
                    <input type="number" name="sdt"><br>
                    Giới tính
                    <input type="radio" name="gt" value="Nam">Nam
                    <input type="radio" name="gt" value="Nu">Nữ<br>
                    Sở thích
                    <input type="checkbox" name="sothich[]" value="Xanh">Xanh
                    <input type="checkbox" name="sothich[]" value="Đỏ">Đỏ
                    <input type="checkbox" name="sothich[]" value="Vàng">Vàng<br>
                    <input type="submit" value="Đăng ký">
                    <input type="reset" value="Làm lại">
                </form>
            </div>
    </div>
</body>
</html>