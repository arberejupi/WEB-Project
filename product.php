<?php 
    class Product{
        private $productID;
        private $productName;
        private $productPrice;
        private $productQuantity;
        private $productImage;

        function __construct($productID,$productName,$productPrice,$productQuantity,$productImage)
        {
            $this->productID=$productID;
            $this->productName=$productName;
            $this->productPrice=$productPrice;
            $this->productQuantity=$productQuantity;
            $this->productImage=$productImage;
        }

        function getProductID(){
            return  $this->productID;
        }

        function getProductName(){
            return  $this->productName;
        }
        function getProductPrice(){
            return  $this->productPrice;
        }
        function getProductQuantity(){
            return  $this->productQuantity;
        }
        function getProductImage(){
            return  $this->productImage;
        }

    }

?>
