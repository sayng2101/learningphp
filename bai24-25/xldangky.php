<?php 
$email = $_POST["email"];
$password = $_POST["password"];
$password_g = $_POST["password-g"];
$hoten = $_POST["ten"];
$diachi = $_POST["diachi"];
$sdt = $_POST["sdt"];
if(isset($_POST["gt"])){
	$gt = $_POST["gt"];
}

echo "Email: $email </br>";
echo "Password: $password </br>";
echo "Password nhập lại: $password_g </br>";
echo "Họ và tên: $hoten </br>";
echo "Địa chỉ: $diachi </br>";
echo "Sđt: $sdt </br>";
echo "Giới tính: $gt </br>";
if(!empty($_POST['sothich'])){
	foreach ($_POST['sothich'] as $value) {
		echo "Sở thích: " . $value . "<br>";
	}
}
echo 'Chúc mừng bạn đăng ký thành công , click <a href="index.php">vào đây</a> để chuyển về trang chủ nếu hệ thống không tự chuyển';

header('Refresh: 4; URL=index.php');