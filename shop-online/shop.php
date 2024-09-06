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
    #aa {
        margin-left: 70px; 
        text=-decoration: none;
        color: white;
    }
    </style>
</head>
<body>
        <nav class="navbar navbar-dark bg-dark">
        <a  id="aa" class="navbar-brand" href="card.php">pay to card</a>
        </nav>
<div class="container">
    <h1 class="mb-4">المنتجات المتوفرة</h1>
    <div class="row">
        <?php
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='col-md-4'>";
                echo "<div class='card' style='width: 18rem;'>";
                echo "<img src='". htmlspecialchars($row['image'], ENT_QUOTES, 'UTF-8') . "' class='card-img-top' alt='صورة المنتج'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . "</h5>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>" . htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8') . " ر.س</h6>";
                echo "<a href='val.php?id=" . $row['id'] . "' class='btn btn-success'>اضافة للعربة</a>";
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
