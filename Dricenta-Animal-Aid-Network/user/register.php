<?php 
  include('../path.php'); 
  include(ROOT_PATH . '/controller/user.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAAN|Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include(ROOT_PATH . '/include/navbar.php'); ?>
    
    <div class="container py-5 d-flex justify-content-center">
      <div class="card p-3" style="width: 45rem;">
        <h1 class="text-center">Register</h1>
        <?php include(ROOT_PATH . '/helper/form_errors.php'); ?>
        <form action="register.php" method="post">
          <div class="mb-3">
            <label for="full-name" class="col-form-label">
              Full Name:
            </label>
            <input type="text" class="form-control" id="full-name" name="full_name" value="<?php echo $full_name; ?>"/>
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>"/>
          </div>
          <div class="mb-3">
            <label for="phone" class="col-form-label">Phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>"/>
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" />
          </div>
          <div class="mb-3">
            <label for="confirm-password" class="col-form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="confirm-password" name="passConf" />
          </div>
          <div class="mb-3 text-center">
            <p>
              <small>
                Already have an Account? <a href="login.php">Login</a>
              </small>
            </p>
          </div>
          <div class="mb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" name="register_btn">Submit</button>
          </div>
        </form>
      </div>
  </div>

    <!-- Footer -->
    <?php include(ROOT_PATH . '/include/footer.php'); ?>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>