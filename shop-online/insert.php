<?php
include('config.php');

if(isset($_POST['upload'])){
    $NAME  = $_POST ['name'];
    $PRICE = $_POST ['price'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    if (!is_dir('images')) {
        mkdir('images', 0777, true); 
    }
    
    $image_up = "images/" . $image_name;
    
    if(move_uploaded_file($image_location, $image_up)) {
       
        $insert = "INSERT INTO prod (name, price, image) VALUES ('$NAME', '$PRICE', '$image_up')";
        if(mysqli_query($con, $insert)) {
            
            header('Location: index.php');
        } else {
            echo "<script>alert('حدث خطا');</script>";
        }
    } else {
        echo "<script>alert('حدث خطأ أثناء رفع الصورة');</script>";
    }
}
?>
