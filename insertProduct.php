<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" placeholder="ProductName" name="ProductName">
        <input type="text" placeholder="ProductPrice" name="ProductPrice">
        <input type="text" placeholder="ProductQuantity" name="ProductQuantity">
        <input type="text" placeholder="ProductImage" name="ProductImage">
        <input type="submit" value="Insert Product" name="insertProduct">
    </form>
    <?php include_once '../controller/productController.php'?>
</body>
</html>