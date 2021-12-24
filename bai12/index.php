<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	 <!-- <form method="get" action="form.php" class="form">
	<div class="First">
	 First Name:
	 <input type="text" name="fFirstName"><br>
	</div>
	 <div class="Last">
	 Last Name:
	 <input type="text" name="fLastName"><br>
	</div>
	 <div class="button">
	 <button type="submit" value="Submit" name="fSubmit">Submit</button>
	 <button type="reset" value="Reset" name="fReset">Reset</button>
	</div>
	 </form> -->

	 <h1>Phép tính trên hai số</h1>
	 <form action="ketqua.php" method="post">
		<p>Chọn phép tính:</p>
		<input type="radio" id="tong" name="tinh">
		<label for="tong">Tổng</label>
		<input type="radio" id="hieu" name="tinh">
		<label for="hieu">Hiệu</label>
		<input type="radio" id="nhan" name="tinh">
		<label for="nhan">Nhân</label>
		<input type="radio" id="chia" name="tinh">
		<label for="chia">Chia</label><br>
		Số thứ nhất:
		<input type="text" name="input1"><br>
		Số thứ hai:
		<input type="text" name="input2"><br>
		<input type="submit" value="submit" >
	 </form>
</body>
</html>