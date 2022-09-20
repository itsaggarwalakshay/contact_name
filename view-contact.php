<!-- add-contact.php -->
<?php 
// $conn=mysqli_connect('localhost','root','','phonebook')or die("connection failed");
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
  .card{
    width: 19rem; 
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }
  .card-img{
    display: flex; 
    justify-content:center;
  }
  .card-img img{
    border-radius: 50%;
    margin: 1rem;
  }
  .card-body{
    display: flex;
    flex-direction: column; 
    align-items: center;
  }
  .list-group-flush{
    display: flex;
    flex-direction: column; 
    align-items: center;
  }
</style>
<body>
<div class="container-fluid bg-light">
  <!-- -----sidebar-starts-here-- -->
<div class="row">
<?php include("sidebar.php"); ?>
<!-- -----sidebar-ends-here-- -->

<!-- -----main-starts-here-- -->
<div class="col-md-2 ">
  <table class="table ">
  <thead>
    <tr>
      <th scope="col" >Contacts Profile</th>
    </tr>
  </thead>
  <?php
      if(!empty($_GET['did'])){
        $id=$_GET['did'];
        $query=$ob->displaysingle($id);
      }
      while ( $row=mysqli_fetch_array($query)) {   
      ?>
  <tbody>
    <tr> 
      <td>
        <a href="view-contact.php?did=<?php echo $row['id'] ?>" style="text-decoration: none;">
        <div class="card">
          <div class="card-img" style="">
         <img src="uploadimage/<?php echo $row['image'] ?>" width="120" height="120" style="">
         </div>
          <div class="card-body"style="">
            <h5 class="card-title"><b><?php echo $row['fname'] ?></b></h5>
            <p class="card-text"><?php echo $row['lname'] ?></p>
          </div>
          <ul class="list-group list-group-flush"style="" >
            <li class="list-group-item"><?php echo $row['phone'] ?></li>
            <li class="list-group-item"><?php echo $row['description'] ?></li>
          </ul>
          <div class="card-body">
             <a href="add-contact.php?eid=<?php echo $row['id'] ?>" class="card-link btn btn-primary m-auto" name="update" >
             Edit contact</a>
             <a href="delete.php?did=<?php echo $row['id'] ?>" class="card-link btn btn-danger m-auto my-2" >Delete contact</a>
          </div>
        </div>
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