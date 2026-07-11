<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>



<table class="table table-bordered">             
<tbody>
<?php
include('connectdb.php');
$vid=$_GET['id'];
$ret=mysqli_query($con,"select * from tbl_patients where id =$vid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="container mt-4">
<div  class="h1 text-center  bg-success text-light rounded-3 container-fluid p-1 m5-">Your Deatils Here</div>
  <table class="table table-bordered">
 <tr>
    <th>name</th>
    <td><?php  echo $row['p_name'];?></td>
    <th>age</th>
    <td><?php  echo $row['p_age'];?></td>
  </tr>
  <tr>
    <th>phoneno</th>
    <td><?php  echo $row['p_phno'];?></td>
    <th>email</th>
    <td><?php  echo $row['email'];?></td>
  </tr>
  <tr>
    <th>gender</th>
    <td><?php  echo $row['gender'];?></td>

  </tr>
   <tr>
    <th>problem</th>
    <td><?php  echo $row['problem'];?></td>

  </tr>
  </div>
<?php 
$cnt=$cnt+1;
}?>
                 
</tbody>
</table>
</body>
</html>