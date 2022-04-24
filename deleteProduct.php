<?php
    include_once '../productRepository.php';

    $productID=$_GET['id'];

    $productRepository= new ProductRepository();

    $productRepository->deleteProduct($productID);

    header("location:../dashboardProducts.php");

?>