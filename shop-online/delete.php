<?php
include('config.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM prod WHERE id=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        echo "<script>alert('تم حذف المنتج بنجاح');</script>";
    } else {
        echo "<script>alert('حدث خطأ أثناء حذف المنتج');</script>";
    }

    $stmt->close();

    header("Location: products.php");
    exit;
}
?>
