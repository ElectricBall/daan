<?php 
  include('path.php'); 
  include(ROOT_PATH . '/database/db.php');
  include(ROOT_PATH . '/controller/program_handler.php');
  include(ROOT_PATH . '/controller/donate.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAAN|Donate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/style.css' ?>">
</head>

<body>
    <!-- Navbar -->
    <?php include("include/navbar.php"); ?>
    
    <!-- Donate -->
    <section class="p-5 text-center" id="donate">
      <h1 class="p-4">Donate</h1>
      <div class="container d-flex justify-content-center g-4">
        
        <div class="card p-3" style="width: 45rem;">
            <p class="lead">Pick out the program and amount to donate</p>
            <?php include(ROOT_PATH . '/include/message.php'); ?>
            <form action="donate.php" method="post">
              <div class="mb-3">
                <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $_SESSION['id']; ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="prog_name" class="form-label">Program</label>
                <select class="form-control" id="prog_name" name="program_id">
                  <?php foreach ($act_prog as $key => $program): ?>
                    <?php if(!empty($prog_id) && $prog_id == $program['program_id']): ?>
                        <option selected value="<?php echo $program['program_id']; ?>"><?php echo $program['name']; ?></option>
                      <?php else: ?>
                        <option value="<?php echo $program['program_id']; ?>"><?php echo $program['name']; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="btn-toolbar mb-3" role="toolbar" aria-label="Donation amount">
                <div class="btn-donation me-2" role="donation" aria-label="Donation">
                  <input type="radio" class="btn-check" name="amount" id="fifty" autocomplete="off" value="50000" checked>
                  <label class="btn btn-secondary" for="fifty">Rp.50.000</label>

                  <input type="radio" class="btn-check" name="amount" id="hundred" autocomplete="off" value="100000">
                  <label class="btn btn-secondary" for="hundred">Rp.100.000</label>
                  
                  <input type="radio" class="btn-check" name="amount" id="hundred_fifty" autocomplete="off" value="150000">
                  <label class="btn btn-secondary" for="hundred_fifty">Rp.150.000</label>
                  
                  <input type="radio" class="btn-check" name="amount" id="two_hundred" autocomplete="off" value="200000">
                  <label class="btn btn-secondary" for="two_hundred">Rp.200.000</label>

                  <!-- <button type="button" class="btn btn-outline-secondary" name="fifty">Rp.50.000</button>
                  <button type="button" class="btn btn-outline-secondary" name="hundred">Rp.100.000</button>
                  <button type="button" class="btn btn-outline-secondary" name="hundred_fifty">Rp.150.000</button>
                  <button type="button" class="btn btn-outline-secondary" name="two_hundred">Rp.200.000</button> -->
                </div>
                <!-- <div class="input-donation">
                  <div class="input-donation-number" id="btnDonationAddon">Input Your Own Value:</div>
                  <input type="number" class="form-control" placeholder="Ex: 25000" aria-label="Ex: 25.000" aria-describedby="btnDonationAddon" name="donation_manual">
                </div> -->
              </div>
              <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" name="donate_btn">Submit</button>
              </div>
            </form>
          </div>
      </div>
    </section>

    <!-- About Us -->
    <section class="bg-dark text-light mt-5 p-md-0 text-center" id="aboutUs">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img class="img-fluid shadow d-none d-md-block" src="https://images.unsplash.com/photo-1527525443983-6e60c75fff46?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxfDB8MXxhbGx8fHx8fHx8fA&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit" alt="">
          </div>
          <div class="col-md-6 py-5">
            <header class="lead">
              <h1>About Us</h1>
              <hr>
            </header>
            <section>
              <h3>Who We Are</h3>
              <p>
                We are Dricenta Animal Aid Network or DAAN for short. We are a non-governmental organization that focus on preserving the wildlife and protect them from any threat.
                Our mission is to make sure animals don't go extinct and tries our hardest to preserve them
              </p>
            </section>
            <section>
              <h3>
                How We Work
              </h3>
              <p>
                We and our members use the donation we received to help provide all kinds of animal 
                facilities that includes but not limited to, conservation facilities, adoption facilities, zoo and many more.
                There are also programs that we have developed to achieve our goal and helps spread awareness to the general 
                public and many more people about the state of our environment today. 

                Together, we can achieve DAAN’s mission to conserve nature and reduce the most pressing threats to the diversity of life on Earth.
          
                Together, in partnership with foundations, governments, businesses, communities, individuals and our more than six million members, we can conserve many of the world’s most ecologically important regions.
            </section>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Footer -->
    <?php include("include/footer.php"); ?>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>