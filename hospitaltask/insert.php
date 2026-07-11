<?php 
//Databse Connection file
include('connectdb.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phoneno=$_POST['phoneno'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $problems=isset($_POST['problem']) ? implode(',',(array)$_POST['problem']) :'';
   
  // Query for data insertion
     $query=mysqli_query($con, "insert into tbl_patients(p_name,p_age, p_phno, email, gender,problem) values('$name','$age', '$phoneno', '$email', '$gender','$problems' )");
    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>