<?php
    include_once '../repository/userRepository.php';

    $userId=$_GET['id'];

    $userRepository= new UserRepository();

    $userRepository->deleteUser($userId);

    header("location:databaseUsers.php");

?>