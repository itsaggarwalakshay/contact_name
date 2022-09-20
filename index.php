<!-- add-contact.php -->
<?php 
include("header.php");
include_once("func.php");
$ob=new dbconnection();
?>
<!DOCTYPE html>
<html>
<head>
  <title>add-contact</title>
</head>
<style>
  .fname{
    font-weight: bold; 
    text-decoration: none; font-size: 20px;
  }
  .contain{
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }
</style>
<body>
<div class="container-fluid bg-light">
  <!-- -----sidebar-starts-here-- -->
<div class="row">
<?php include("sidebar.php"); ?>  
<!-- -----sidebar-ends-here-- -->
<!-- -----main-starts-here-- -->
<div class="col-md-7 contain">
<table class="table ">
<thead>
  <tr>
    <th scope="col" >Contacts</th>
  </tr>
</thead>
  <?php    
  if(!empty($_GET['s'])){
      $searchname=$_GET['s'];
      $query=$ob->search($searchname);
      
  }
  else{
      $query=$ob->display();
  }
  while($row=mysqli_fetch_array($query)){  
  ?>
<tbody>
  <tr> 
    <td>
    <a href="view-contact.php?did=<?php echo $row['id'] ?>" class="fname">
    <span>
      <img src="uploadimage/<?php echo $row['image'] ?>" class="mx-3" width="60" height="60" style="border-radius: 50%;">
    </span><?php echo $row['fname'] ?>
    </a>
    </td>  
  </tr>
  <?php
  }
  ?>
</tbody>
</div>
<!-- -----main-ends-here-- --> 
</div>
</div>
</body>
</html>