<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php
//database connection  file
include('connectdb.php');
//Code for deletion
if(isset($_GET['id']))
{
$rid=intval($_GET['id']);
$sql=mysqli_query($con,"delete from tbl_patients where id=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'index.php'</script>";     
} 
?>

</body>
</html>