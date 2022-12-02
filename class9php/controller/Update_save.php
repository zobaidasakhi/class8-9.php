<?php
session_start();

if(isset($_POST['submit'])){
    
    $Id =$_POST['postId'];
    $first =$_POST['first'];
    $last = $_POST['last'];
    $password = $_POST['password'];
$errors = [];
if(empty($first)){
    $errors['first'] = "first din";
}

if(empty($last)){
    $errors['last'] = "last din";
}
if(empty($password)){
    $errors['password'] = "password din";
}
if(count($errors) == 0){
    include "../inc/env.php";
$tata= " UPDATE users SET First='$first',Last='$last',Password='$password' WHERE Id='$Id'";


$update = mysqli_query($connection,$tata);
$_SESSION['done'] = 'your post is updated.';
header('location:../all_save.php');
}

else{
$_SESSION['errors'] = $errors;
    header("location:../edit_save.php?Id=$Id");
}
}
