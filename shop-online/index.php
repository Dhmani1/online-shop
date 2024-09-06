<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop idh7</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl; 
        }
        .main {
            width: 300px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            text-align: center;
            margin-top: 50px; 
        }
        .main h2 {
            margin-bottom: 20px;
            color: #333; 
        }
        .main input[type="text"],
        .main input[type="file"],
        .main button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            text-align: right; 
        }
        .main label {
            display: block;
            margin-bottom: 10px;
            cursor: pointer;
            color: #007bff;
            text-align: right; 
        }
        .main a {
            text-decoration: none;
            color: #007bff;
            margin-top: 10px;
            display: inline-block;
            text-align: right; 
        }
        .main button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center; 
        }
        .main button:hover {
            background-color: #0056b3;
        }
        p {
            margin-top: 20px;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
        <h2>متجر تسويق</h2>
        <img src="logo.png" alt="logo" width="220px">
        <div>
            <input type="text" name='name' placeholder="اسم المنتج">
        </div>
        <div>
            <input type="text" name='price' placeholder="سعر المنتج">
        </div>
        <div>
            <input type="file" id="file" name="image" style='display:none;'>
            <label for="file">اختيار صورة المنتج</label>
        </div>
        <div>
            <button name='upload'>رفع منتج</button>
        </div>
        <div>
            <a href="products.php">عرض كل المنتجات</a>
        </div>
        </form>
    </div>
    <p>by idh7</p>
    </center>
</body>
</html>
