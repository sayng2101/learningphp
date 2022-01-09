<?php 
if (isset($_POST['Upload'])) {
	if (isset($_FILES['file'])) {
		if($_FILES["file"]["size"] == 0){
			echo "Bạn chưa chọn ảnh";
		}
		else {
			move_uploaded_file($_FILES["file"]["tmp_name"], './img/' .$_FILES['file']["name"]);
			echo "Tên file: " . $_FILES["file"]["name"] . "<br>";
			echo "Loại file: " . $_FILES["file"]["type"] . "<br>";
			echo "Kích cỡ: " . $_FILES["file"]["size"] . " kb";
		}
	}
}