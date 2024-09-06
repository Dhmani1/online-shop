<?php
include('config.php');

$id = intval($_GET['id']);
$up = mysqli_query($con, "SELECT * FROM prod WHERE id=$id");
$data = mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>تأكيد المنتج</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    input {
        display: none;
    }
    .main {
        width: 30%;
        padding: 20px;
        box-shadow: 1px 1px 10px black;
        margin-top: 50px;
    }
</style>
</head>
<body>
<center>
<div class="main">    
    <form action="card.php" method="post">
        <h2>هل تريد الشراء؟</h2>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="hidden" name="name" value="<?php echo $data['name']; ?>">
        <input type="hidden" name="price" value="<?php echo $data['price']; ?>">
        <button name="add" type="submit" class="btn btn-warning">تأكيد إضافة المنتج للعربة</button>
        <br>
        <a href="shop.php">الرجوع لصفحة المنتجات</a>
    </form>
</div>
</center>
</body>
</html>
