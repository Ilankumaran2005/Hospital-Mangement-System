<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>index page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body class="container mt-4 ">
  <h2 class="col m-4 text-center bg-info rounded-2 text-dark p-2">Hospital Management</h2>
  <table class="table  bg-light text-dark rounded-2 justify-content-center table-bordered  ">
   <thead class="bg-warning">
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone no</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Problem</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include('connectdb.php');
      $ret=mysqli_query($con,"select * From tbl_patients");
      $row=mysqli_num_rows($ret);
      if($row>0){
        $cnt=1;
        while ($row=mysqli_fetch_array($ret))
         {
      ?>
      <tr>
        <td><?php echo $cnt ?></td>
        <td><?php echo $row['p_name'] ?></td>
        <td><?php echo $row['p_age'] ?></td>
        <td><?php echo $row['p_phno'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['problem'] ?></td>
        <td>
<a href="view.php?id=<?php echo htmlentities ($row['id']);?>" class="view" title="View" data-toggle="tooltip">
  <i class="material-icons">👁️</i>
</a>
<a href="edit.php?id=<?php echo htmlentities ($row['id']);?>" class="edit" title="Edit" data-toggle="tooltip"> <i class="material-icons">🖉</i>
</a>                       
<a href="delete.php?id=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">🗑️</i></a>
</td>
</tr>

<?php $cnt=$cnt+1; }} else {
        ?>
      <tr>
      <th style="text-align:center; color:black;" colspan="8">No Record Found</th>
      </tr>
      <?php 
    } 
    ?> 
      </form>
    </tbody>
  </table>
<div class="d-flex justify-content-center">
    <a href="add.php" 
       class="btn bg-success p-2 mt-4 rounded-3 text-light border-dark">
       Add More
    </a>
</div>

</body>
</html>