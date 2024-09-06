<?php
include('config.php');

// التحقق من وجود عملية إضافة المنتج
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    // إدراج المنتج في جدول العربة
    $query = "INSERT INTO addcard (name, price) VALUES ('$name', '$price')";
    mysqli_query($con, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>عربتي</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    h3 {
        font-weight: bold;
    }
    main {
        width: 40%;
        margin-top: 20px;
    }
    table {
        box-shadow: 1px 1px 10px black;
    }
    thead {
        background-color: gray;
        color: white;
        text-align: center;
    }
    tbody {
        text-align: center;
    }
</style>
</head>
<body>
<center>
    <h3>منتجات محجوزة</h3>
</center>

<?php
// استرجاع المنتجات من العربة
$result = mysqli_query($con, "SELECT * FROM addcard");
?>

<center>
<main>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">اسم المنتج</th>
            <th scope="col">سعر المنتج</th>
            <th scope="col">إزالة المنتج</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><a href="del_card.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">إزالة</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</main>
</center>

<center>
    <a href="shop.php">الرجوع لصفحة المنتجات</a>
</center>

</body>
</html>
