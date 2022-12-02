<?php
  
session_start();
include '../inc/env.php';

if(isset($_POST['submit'])){
    $errors =[];
    
    $request = $_POST;
    
  $first = $request['first'];
  $last = $request['last'];
  $password = $request['password'] ;
// print_r($request);
// exit();
  if(empty($first)){
    $msg ="first dewa hoyeche?";
    $errors['first'] = $msg;
}

if(empty($last)){
  $msg ="last dewa hoyeche?";
  $errors['last'] = $msg;
}
if(empty($password)){
  $msg ="password dewa hoyeche?";
    $errors['password'] = $msg;
}
  
if (count($errors)>0){
  $_SESSION['errors'] = $errors;
  $_SESSION['old_data'] =$request;
  header("Location: ../index.php");

} 
else{
   $data = "INSERT INTO users( First, Last, Password) VALUES ('$first','$last','$password')";

$str = mysqli_query($connection,$data);
if($str){
  header("Location:../index.php");
$_SESSION['done'] = "WELCOME TO YOUR ACCOUNT";
}else 
echo "sorry";

}
}



  