<?php
include('config.php');

// التحقق من وجود معرّف المنتج في الرابط
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // استعلام لحذف المنتج من العربة
    $delete = "DELETE FROM addcard WHERE id = ?";
    $stmt = $con->prepare($delete);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('تم حذف المنتج بنجاح');</script>";
    } else {
        echo "<script>alert('حدث خطأ أثناء حذف المنتج');</script>";
    }

    // إعادة التوجيه إلى صفحة العربة
    header("Location: card.php");
    exit;
} else {
    // في حال عدم وجود معرّف المنتج
    echo "<script>alert('معرّف المنتج غير موجود');</script>";
    header("Location: card.php");
    exit;
}
?>
