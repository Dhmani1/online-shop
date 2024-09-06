<?php
include('config.php');

$query = "SELECT * FROM prod";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة المنتجات</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card img {
            max-height: 200px;
            object-fit: cover;
        }
        .container {
            padding-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <center>
    <h3 class="mb-4">المنتجات المتوفرة</h3>
    <div class="row">
        <?php
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='col-md-4'>";
                echo "<div class='card' style='width: 15rem;'>";
                echo "<img src='". htmlspecialchars($row['image'], ENT_QUOTES, 'UTF-8') . "' class='card-img-top' alt='صورة المنتج'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . "</h5>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>" . htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8') . " ر.س</h6>";
                echo "<a href='update.php?id=" . $row['id'] . "' class='btn btn-primary'>تعديل</a>";
                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirm(\"هل أنت متأكد أنك تريد حذف هذا المنتج؟\");'>حذف</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<div class='col-12'><p class='text-center'>لا توجد منتجات</p></div>";
        }
        ?>
    </div>
</div>
</center>
</body>
</html>
