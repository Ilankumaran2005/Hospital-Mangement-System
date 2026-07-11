<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Patient</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
 include('connectdb.php');
 

 if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $problems =isset($_POST['problem']) ? implode(',',(array)$_POST['problem']) :'';

    $query = mysqli_query($con, "UPDATE tbl_patients SET p_name='$name', p_age='$age', p_phno='$phoneno', email='$email', gender='$gender', problem='$problems' WHERE id='$id'");

    if($query){
        echo "<script>alert('You have successfully updated the data');</script>";
        echo "<script>document.location='index.php';</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
  }
   $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
   $ret = mysqli_query($con, "SELECT * FROM tbl_patients WHERE id='$id'");
   $row = mysqli_fetch_assoc($ret);
?>

<div class="container mt-5">
  <!-- Card -->
  <div >
    <div class="card-header bg-success text-white text-center fs-3 rounded-3">
      Update Patient Details
    </div>
    <div >
      <form method="POST">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
          <label class="row ms-1 mb-2">Name</label>
          <input class="form-control" type="text" name="name" value="<?php echo $row['p_name']; ?>" required></input>
        </div>

        <div class="mb-3">
          <label class="row ms-1 mb-2">Age</label>
          <input class="form-control" type="text" name="age" value="<?php echo $row['p_age']; ?>" required>
        </div>

        <div class="mb-3">
          <label class="row ms-1 mb-2">Mobile No</label>
          <input class="form-control" type="text" name="phoneno" value="<?php echo $row['p_phno']; ?>" required pattern="[0-9]{10}" maxlength="10">
        </div>

        <div class="mb-3">
          <label class="row ms-1 mb-2">Email</label>
          <input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>" required>
        </div>

        <div class="mb-3">
          <label class="row ms-1 mb-2">Gender</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Male" <?php if($row['gender']=='Male') echo 'checked'; ?>>
            <label class="form-check-label">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Female" <?php if($row['gender']=='Female') echo 'checked'; ?>>
            <label class="form-check-label">Female</label>
          </div>
        </div>

        <!-- probelm -->

        <?php $SelectedProblems = [];
          if (!empty($row['problem'])) {
            $SelectedProblems = explode(",",$row['problem']);
          }?>
         
         <label class="row ms-1 mb-2">Problem</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="problem[]" value="Cold" <?php if (in_array("Cold",$SelectedProblems))echo 'checked';?>>Cold
            </div>
            <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="problem[]" value="Cough" <?php if (in_array("Cough",$SelectedProblems))echo 'checked';?>>Cough
          </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="problem[]" value="Fever" <?php if (in_array("Fever",$SelectedProblems))echo 'checked';?>>Fever
          </div>
            <div class="form-check form-check-inline">
            <input class=" row form-check-input" type="checkbox" name="problem[]" value="Headache" <?php if (in_array("Headache",$SelectedProblems))echo 'checked';?>>Headache
          </div>
            <div class="form-check form-check-inline">
            <input class=" row form-check-input" type="checkbox" name="problem[]"  value="Others" <?php if (in_array("Others",$SelectedProblems))echo 'checked';?>>Others
          </div>

        <div class="d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-primary w-25 mt-5">Update</button></div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
