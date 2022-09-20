<!DOCTYPE html>
<html>
<head>
  <title>sidebar</title>
</head>
<style>
  .btn-contain{
    display: flex;
    justify-content: center;
  }
  .sidebar{
    width: 280px; height: 95vh;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }
</style>
<body>
  <!-- -----sidebar-starts-here-- -->

<div class="col-md-2">
<div class="d-flex flex-column flex-shrink-0 sidebar bg-light">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
  <span class="fs-4">Contact book</span>
  </a>
<hr>
<div class="btn-contain">
 <a class="btn btn-primary" href="add-contact.php" role="button"><i class="fa fa-user-plus"></i> Create new contact</a>
</div>

<hr>
<ul class="nav nav-pills flex-column mb-auto">
  <li class="nav-item">
    <a href="index.php" class="nav-link link-dark" >
      <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
      <b>Contacts list</b>
    </a>
    <hr>
  </li>
  <li>
     <form action="index.php" method="get" class="form-inline my-2 mx-4 my-lg-0" >
      <input class="form-control mr-sm-2 my-2" type="search" placeholder="Search" aria-label="Search" name="s">
      <button class="btn btn-primary  mx-2 my-sm-0" type="submit" name="search">Search</button>
    </form>
  </li>
</ul>
</div>
</div>
<!-- -----sidebar-ends-here-- -->
</body>
</html>