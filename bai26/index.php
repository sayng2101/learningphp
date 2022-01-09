<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 26</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>Thuộc tính của tập tin</p>
        <label for="">Tập tin: </label>
        <input type="file" value="Browse" name="file"><br>
        <input type="submit" value="Thuộc tính tệp tin" name="Upload">
    </form>
    </div>
</body>
</html>