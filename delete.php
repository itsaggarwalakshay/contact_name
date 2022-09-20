<?php
$conn=mysqli_connect('localhost','root','','phonebook')or die("connection failed");
include_once("func.php");
 $ob=new dbconnection();
// ------delete---------
if(!empty($_GET['did'])){
$did=$_GET['did'];
// -----delete from folder---

$sql= "SELECT * FROM `contacts` WHERE id=$did";
$result= mysqli_query($conn,$sql)or die("query failed : select");
$row = mysqli_fetch_assoc($result);
// print_r($row);
// die();
unlink("uploadimage/".$row['image']);
// -----delete from database------- 
 $query=$ob->delete($did);
if ($query){
   echo "<SCRIPT>alert('contact inserted')
            window.location.replace('index.php');
          </SCRIPT>";
}else{
  echo "record not deleted";
}
}
?>