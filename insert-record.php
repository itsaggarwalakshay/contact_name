<?php
$conn=mysqli_connect('localhost','root','','phonebook')or die("connection failed");
include_once("func.php");
$ob=new dbconnection();
if (isset($_POST['save'])) {
  $getfname=$_POST['fname'];
  $getlname=$_POST['lname'];
  $getphone=$_POST['phone'];
  $getdesc=$_POST['desc'];
  $filename = $_FILES['file']['name'];
  $filepath = $_FILES['file']['tmp_name'];
  $imagename = explode(".", $filename);
  $ext = $imagename[1];

  $query = "show table status like 'contacts'";
  $result = mysqli_query($conn,$query);
  $row= mysqli_fetch_assoc($result);

  $id=$row['Auto_increment'];
  $newfilename=$id.".".$ext;
   if(!empty($_GET['editid']))
  {
    $id=$_GET['editid'];
    $query=$ob->update($getfname,$getlname,$getphone,$getdesc,$newfilename,$id);
  }else{
    $query=$ob->insert($getfname,$getlname,$getphone,$getdesc,$newfilename);
  }
  if ($query) {
    echo "<SCRIPT>alert('contact deleted')
            window.location.replace('index.php');
          </SCRIPT>";
    move_uploaded_file($filepath, "uploadimage/".$newfilename); 
  }else{
    echo "image not inserted";
  } 
}


?>