<?php include('../controller/admin.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAAN - Sign In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <!-- login form -->
  <div class="container">
    <form action="sign_in.php" method="post">
      <div class="mb-3">
        <label for="emp_id" class="form-label">Employee ID</label>
        <input type="text" class="form-control" id="emp_id" name="empId">
      </div>
      <div class="mb-3">
        <label for="emp_pass" class="form-label">Password</label>
        <input type="password" class="form-control" id="emp_pass" name="empPass">
      </div>
      <button type="submit" class="btn btn-primary" name="login_btn">Submit</button>
    </form>
  </div>
</body>
</html>