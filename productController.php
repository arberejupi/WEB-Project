<?php 
    include_once '../repository/productRepository.php';
    include_once '../model/product.php';

    if(isset($_POST['insertProduct'])){
        if(empty($_POST['ProductName']) || empty($_POST['ProductPrice']) || empty($_POST['ProductQuantity']) || empty($_POST['ProductImage'])){
            echo "<script> alert('Fill all fields');</script>";
        }else
        {
            $name=$_POST['ProductName'];
            $price=$_POST['ProductPrice'];
            $quantity=$_POST['ProductQuantity'];
            $image=$_POST['ProductImage'];
            $id=$_POST['id'];
        }

        $product=new Product($id,$name, $price, $quantity, $image);
        $productRepository= new ProductRepository();
        $productRepository -> insertProduct($product);

    }
?>