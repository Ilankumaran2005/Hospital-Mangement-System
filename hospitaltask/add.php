<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Patient</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <!-- Card for form -->
  <div>
    <div class="bg-success text-white text-center p-2 rounded-3 m-3">
      <h3>Add Patient Details</h3>
     
    </div>
    <div >
      <form action="insert.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Age</label>
          <input type="text" name="age" class="form-control" placeholder="Enter your age" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Mobile No</label>
          <input type="text" name="phoneno" class="form-control" placeholder="Enter your mobile number" required pattern="[0-9]{10}" maxlength='10'>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
          <label class="form-label d-block">Gender</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Male" required>
            <label class="form-check-label">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Female" required>
            <label class="form-check-label">Female</label>
          </div>
        </div>

        <!-- problem -->
          <label class="row ms-1 mb-2">Problem</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="problem[]" value="Cold">Cold
            </div>
            <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="problem[]" value="Cough">Cough
          </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="problem[]" value="Fever">Fever
          </div>
            <div class="form-check form-check-inline">
            <input class=" row form-check-input" type="checkbox" name="problem[]" value="Headache">Headache
          </div>
            <div class="form-check form-check-inline">
            <input class=" row form-check-input" type="checkbox" name="problem[]" value="Others">Others
          </div>



<div class="justify-content-center d-flex">
        <button type="submit" name="submit" class="btn btn-info w-25 mt-5">Submit</button></div>
      </form>
    </div>
  </div>
</div>

</body>
</html>