<!-- add-contact.php -->
<?php 
include("header.php"); 
// ----edit---
include_once("func.php");
$ob=new dbconnection();
// ----edit---
if(!empty($_GET['eid']))
{
$id=$_GET['eid'];
// print_r($id);
$query = $ob->edit($id);
$row=mysqli_fetch_array($query);

}

?>
<!DOCTYPE html>
<html>
<head>
<title>add-contact</title>
</head>
<style>
.contain{
  height: 55vh; 
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
<div class="col-md-8 p-5 bg-light mt-3 contain">
<div class="mx-auto" style="width: 400px;">
<h1>create new contact</h1>
</div>

<form action="insert-record.php" method="post" enctype="multipart/form-data">
<?php

?>
<input type="hidden" name="editid" 
value="<?php if(!empty($row['id'])) echo $row['id'] ?>" > 
<div class="form-group">
  <label>First Name</label>
  <input type="text" class="form-control"  placeholder="Enter First Name"
  name="fname" value="<?php if(!empty($row['fname'])) echo $row['fname'] ?>" required>
</div>
<div class="form-group">
  <label>Last Name</label>
  <input type="text" class="form-control"  placeholder="Enter Last Name"
  name="lname" value="<?php if(!empty($row['lname'])) echo $row['lname'] ?>" required>
</div>
<div class="form-group">
  <label>Phone No</label>
  <input type="text" class="form-control"  placeholder="Enter Phone No"
  name="phone" value="<?php if(!empty($row['phone'])) echo $row['phone'] ?>" required>
</div>
<div class="form-group">
  <label>Description <small>(optional)</small></label>
  <input type="text" class="form-control"  placeholder="Enter Description"
  name="desc" value="<?php if(!empty($row['description'])) echo $row['description'] ?>">
</div>
 <div class="form-group">
  <label>upload file</label>
<input type="file" name="file" class="form-control"
value="<?php if(!empty($row['image'])) echo $row['image'] ?>" >
</div>
  <button type="submit" class="btn btn-primary" name="save">Submit</button>
</form>
</div>

<!-- -----main-ends-here-- -->
</div>
</div>
</body>
</html>