<?php
session_start();

include_once "../inc/env.php";
$Id= $_GET['Id'];
$data="DELETE FROM users WHERE Id =$Id";
$delete_option = mysqli_query($connection,$data);
if ($delete_option){

$_SESSION['done'] ='delete done';
header("location:../all_save.php");

}else{
    echo" try again";
}