<?php 
include_once 'database/databaseConnection.php';
    class ProductRepository{
        private $connection;

        function __construct()
        {
            $conn=new DatabaseConnection;
            $this->connection=$conn->startConnection();
        }

        function insertProduct($product){
            $conn=$this->connection;

            
            $id=$product->getProductID();
            $name=$product->getProductName();
            $price=$product->getProductPrice();
            $quantity=$product->getProductQuantity();
            $image=$product->getProductImage();

            $sql="INSERT INTO products(ProductName,ProductPrice,ProductQuantity,ProductImage) values (?, ?, ?, ?)";

            $statement=$conn->prepare($sql);
            $statement->execute([$name,$price,$quantity,$image]);

            echo "<script> alert('product has been inserted successfuly!'); </script>";
        }

        function getProductByID($id){
            $conn=$this->connection;

            $sql="SELECT * FROM products WHERE ProductID ='$id'";
            $statement=$conn->query($sql);
            $product=$statement->fetch();
            return $product;
        }

        function updateProduct($productID,$productName,$productPrice,$productQuantity,$productImage){
            $conn=$this->connection;
    
            $sql="UPDATE products SET ProductName=?, ProductPrice=?,ProductQuantity=?, ProductImage=? WHERE productID=?";
    
            $statement=$conn->prepare($sql);
            $statement->execute([$productName,$productPrice,$productQuantity,$productImage,$productID]);
    
            echo "<script> alert ('update was succesful');</script>";
        }

        function getAllProducts(){
            $conn= $this->connection;
    
            $sql="SELECT * FROM products";
    
            
            $statement = $conn->query($sql);
            $products = $statement->fetchAll();
    
            return $products;
        }

        function deleteProduct($id){
            $conn=$this->connection;
    
            $sql="DELETE FROM products  WHERE ProductID=?";
    
            $statement=$conn->prepare($sql);
    
            $statement->execute([$id]);
    
            echo "<script> alert ('delete was succesful')</script>";
        }
    }
?>