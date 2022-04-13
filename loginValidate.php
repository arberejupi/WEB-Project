
<?php
    
  include_once 'database/connection.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $roli1="user";
    $roli2="admin";
    $sql="select * from user where username='".$username."'  and password='".$password."'" ;

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    if($row["role"]=="user" ){
        session_start();
        $_SESSION['user']=$username;
        $_SESSION['roli']=$roli1;
        header("location:home.php");
        
    }else if($row["role"]=="admin"){
        session_start();
        $_SESSION['user']=$username;
        $_SESSION['roli']=$roli2;
        header("location:home.php");
    } else{
        echo "<script>alert('Pass gabim');</script>";
        header("location:loginRegister.php");
    }
    
    
    /*$stmt=$con->prepare("SELECT * FROM users WHERE username=$username AND password =$passowrd LIMIT 1");
   
    $stmt->execute(array($username,$passowrd));
    $checkuser=$stmt->rowCount();
    $user=$stmt->fetch();

    if($checkuser>0){
        $_SESSION['user']=$user['username'];
        $_SESSION['role']=$user['role'];
        header("location:home.php");
    }*/

    /*$query="select * from user where username='".$_POST['username']."'  and password='".$_POST['password']."'" ;
    
    $result=mysqli_query($con,$query);

    

    if(mysqli_fetch_assoc($result)){
        $_SESSION['user']=$_POST['username'];
        header("location:home.php");
    }
    else{
        echo "<script>alert('Pass gabim');</script>";
        header("location:loginRegister.php");
    }*/

/*$quer="select * from user where role='".["admin"]."'  or role='".["user"]."'" ;
    $rezultati=mysqli_query($con,$quer);
    if(mysqli_fetch_assoc($result)){
        $_SESSION['Role']=['role'];
        header("location:home.php");
    }*/
}

?>
