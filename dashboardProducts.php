<?php
include_once 'productRepository.php';
include_once 'database/connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .DIV1{
            display: flex;
            flex-direction: row;
     
            margin-top: 2%;
            margin-left: 1%;
            border: 2px solid green;
            width: auto;
            height: auto;
        }
        .duA{
            display: flex;
            flex-direction: row-reverse;
            margin-right: 5%;
        }
        .update{
            background-color: blue;
        }
        a.button {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;
                text-decoration: none;
                color: initial;
                background-color: lightblue;
                border: 2px solid black;
        }
        .update{
            width: 444px;
            background-color: blue;
            border: 2px solid black;
            color: white;
        }
    </style>
</head>
<body>
    <a class="duA"href="http://localhost/Projekti/WEB-Project%20Part%203/view/dashboard.php"> <h3>Dashboard</h3> </a>

    <a href="http://localhost/Projekti/WEB-Project%20Part%203/view/insertProduct.php" class="button">
        Add Product
    </a>

   
        
    <table border="1">
        <tr>
            <th>ProductID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Product Image</th>
            <th colspan="2">Edit/Delete</th>
            
            
        </tr>

        <?php 
            $productRepository=new ProductRepository;
            $products=$productRepository->getAllProducts();

            foreach($products as $product){
                echo "

                <tr>
                    <td>$product[ProductID]</td>
                    <td>$product[ProductName]</td>
                    <td>$product[ProductPrice]</td>
                    <td>$product[ProductQuantity]</td>
                    <td>$product[ProductImage]</td>
                    
                    <td> <a href='view/editProduct.php?id=$product[ProductID]'>EDIT</td>
                    <td><a href='view/deleteProduct.php?id=$product[ProductID]'>DELETE</a></td>
                ";
                ?>
                
                <?php
            }    
        ?>
    </table>
            
</body>
</html>


   <div class="DIV1">
                <?php
                    $productRepository=new ProductRepository;
                    $products=$productRepository->getAllProducts();
               

                    $query="select * from products";
                    $result=mysqli_query($con,$query);
                    foreach($products as $product){
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>  
                    <div  class="a" style="width: 25%;">
                        <div class="image">  
                            <img  width="100px" height="100px" src="<?php echo $row['ProductImage']?>" class=""></div>
                                <div class="pic-info">
                                <?php
                                    echo"
                                       $product[ProductID]
                                    ";
                                ?>   
                                <p><?php echo $row['ProductName']?></p>
                                    <p style="margin-left:4%"><?php echo $row['ProductPrice']?></p>
                                    <p>Quantity<?php echo $row['ProductQuantity']?></p>
                                    <?php
                                    echo"
                                    <a href='view/editProduct.php?id=$product[ProductID]'>EDIT</a>
                                    <a href='view/deleteProduct.php?id=$product[ProductID]'>Delete</a>
                                    ";
                                    
                                ?>
                                </div>
                       
                        </div>
                <?php
                
                    }
                    }
                ?>
</div> 
