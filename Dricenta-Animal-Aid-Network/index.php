<?php 
  include('path.php'); 
  include(ROOT_PATH . '/database/db.php');
  include(ROOT_PATH . '/controller/program_handler.php'); 
  include(ROOT_PATH . '/controller/news_handler.php');
  include(ROOT_PATH . '/controller/event_handler.php');
  include(ROOT_PATH . '/controller/article_handler.php');
  include(ROOT_PATH . '/controller/donate.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include("include/navbar.php"); ?>
    
    <!-- Showcase -->
    <section class="bg-dark text-light p-5 p-md-0 text-center" id="home">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Save an <span class="text-info">Animal</span>  Today!</h1>
            <P class="lead">
              By Donating, You Are Helping Animals and Environment
            </P>
            <a type="button" href="#aboutUs" class="btn btn-outline-info">Find Out More!</a>
          </div>
          <img class=" border rounded w-25 d-none d-md-block"  src="https://images.unsplash.com/photo-1602491453631-e2a5ad90a131?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80" alt="">
        </div>
      </div>
    </section>

    <!-- Programs -->
    <section class="p-5" id="programs">
      <div class="container">
        <div class="row text-center g-4">
          <!-- display session messages -->
          <?php include(ROOT_PATH . "/include/message.php"); ?>
          <h1>Programs</h1>
          <?php foreach ($act_prog as $key => $program): ?>
            <?php if($key < 3): ?>
              <div class="col-md">
                <div class="card mb-3 shadow">
                  <a href="#" class="no-dec">
                    <img src="<?php echo "assets/images/" . $program['image']; ?>" class="card-img-top" alt="Image Not Loaded">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $program['name']; ?></h5>
                      <p class="card-text"><?php echo substr($program['content'], 0, 150) . "..."; ?></p>
                      <p class="card-text"><small class="text-muted"><?php echo date('F j, Y', strtotime($program['date'])); ?></small></p>
                    </div>
                  </a>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <div class="text-center p-3">
          <button class="btn btn-outline-info" type="button">
            More Programs
          </button>
        </div>
      </div>
    </section>
    
    
    <!-- News & Events -->
    <section class="bg-dark my-5 p-5 text-start" id="newsEvents">
      <div class="container">
        <div class="row">
          <!-- News -->
          <div class="col-md-6">
            <h1 class="text-center text-light pb-3">News</h1>
            <div class="row">
              <?php foreach ($pub_news as $key => $new): ?>
                <?php if($key < 3): ?>
                  <div class="col-md">
                    <div class="card mb-3 shadow" style="min-width: 250px;max-width: 540px;">
                      <a href="#" class="no-dec">
                        <img src="<?php echo "assets/images/" . $new['image']; ?>" class="card-img-top" alt="Image Not Loaded">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo substr($new['title'], 0, 45) . "..."; ?></h5>
                            <p class="card-text"><?php echo substr($new['content'], 0, 150) . "..."; ?></p>
                            <p class="card-text"><small class="text-muted"><?php echo date('F j, Y', strtotime($new['date'])); ?>. <?php echo $new['author']; ?></small></p>
                        </div>
                      </a>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
            <!-- <div class="card mb-3 text-dark" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-lg-4">
                  <img src="https://images.unsplash.com/photo-1602491453631-e2a5ad90a131?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-lg-8">
                  <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, dolorem!</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, voluptatum?</p>
                    <a href="#" class="btn btn-info">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3 text-dark" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="https://images.unsplash.com/photo-1602491453631-e2a5ad90a131?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, dolorem!</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, voluptatum?</p>
                    <a href="#" class="btn btn-info">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3 text-dark" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="https://images.unsplash.com/photo-1602491453631-e2a5ad90a131?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, dolorem!</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, voluptatum?</p>
                    <a href="#" class="btn btn-info">Learn More</a>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="text-center">
              <button class="btn btn-outline-info" type="button">
                Read More!
              </button>
            </div>
          </div>
          <!-- Events -->
          <div class="col-md-6" id="events">
            <h1 class="text-center text-light pb-3">Events</h1>
            <div class="container text-dark">
              <div class="row">
              <?php foreach ($act_event as $key => $event): ?>
                <?php if($key < 3): ?>
                  <div class="col-md p-1">
                    <div class="card" style="min-width: 250px;max-width: 540px;">
                      <a href="#" class="no-dec">
                        <img src="<?php echo "assets/images/" . $event['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo substr($event['name'], 0, 50) . "..."; ?></h5>
                          <p class="card-text"><?php echo substr($event['content'], 0, 150) . "..."; ?></p>
                          <p class="card-text"><small class="text-muted"><?php echo date('F j, Y', strtotime($event['date'])); ?></small></p>
                      </a>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
                <!-- <div class="col-md p-1">
                  <div class="card" style="min-width: 250px; max-width: 540px;">
                    <img src="https://images.unsplash.com/photo-1527118732049-c88155f2107c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&h=250&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md p-1">
                  <div class="card" style="min-width: 250px; max-width: 540px;">
                    <img src="https://images.unsplash.com/photo-1527118732049-c88155f2107c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&h=250&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="text-center p-3">
                <button class="btn btn-outline-info" type="button">
                  Read More!
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Articles -->
    <section class="p-5" id="articles">
      <div class="container text-center g-4">
        <h1 class="p-4">Articles</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          <?php foreach ($pub_article as $key => $article): ?>
            <?php if($key < 7): ?>
              <div class="col">
                <a href="#" class="no-dec">
                  <div class="card shadow">
                    <img src="<?php echo "assets/images/" . $article['image']; ?>" class="card-img-top" alt="No Image Found">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo substr($article['title'], 0, 45) . "..."; ?></h5>
                      <p class="card-text"><?php echo substr($article['content'], 0, 150) . "..."; ?></p>
                      <p class="card-text"><small class="text-muted"><?php echo date('F j, Y', strtotime($article['date'])); ?>. <?php echo $article['author']; ?></small></p>
                    </div>
                  </div>
                </a>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="text-center p-3 my-4">
        <button class="btn btn-outline-info" type="button">
          More articles
        </button>
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

    <!-- donate -->
    
    <?php if (isset($_SESSION['id'])): ?>
      <section class="bg-info text-dark p-5" id="donations">
        <div class="container">
          <div class="d-md-flex justify-content-center align-items-center my-4">
            <h3 class="mb-3 mb-md-0">Donate To Our Cause now!</h3>
          </div>
          <div class="d-md-flex justify-content-center align-items-center">
            <a class="no-dec btn-lg btn-warning rounded" type="button" href="<?php echo BASE_URL . 'donate.php' ?>">
                  Donate Now!
            </a>
            <!-- <button class="btn-lg btn-outline-dark" data-bs-toggle="modal" data-bs-target="#donate" type="button">
                  Donate Now!
            </button> -->
          </div>
        </div>
      </section>
    <?php else: ?>
      <section class="bg-info text-dark p-5" id="donations">
        <div class="container">
          <div class="d-md-flex justify-content-center align-items-center my-4">
            <h3 class="mb-3 mb-md-0">Donate To Our Cause now!</h3>
          </div>
          <div class="d-md-flex justify-content-center align-items-center">
            <a class="no-dec btn-lg btn-warning rounded" type="button" href="<?php echo BASE_URL . 'user/login.php' ?>">
                  Login To Donate Now!
            </a>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <!-- Footer -->
    <?php include("include/footer.php"); ?>

    <!-- Modal -->
    <div
      class="modal fade"
      id="donate"
      tabindex="-1"
      aria-labelledby="donateLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="donateLabel">Donate</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p class="lead">Fill out this form to donate</p>
            <form action="<?php echo BASE_URL . '/index.php' ?>" method="post">
              <!-- <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  First Name:
                </label>
                <input type="text" class="form-control" id="first-name" name="first_name" />
              </div>
              <div class="mb-3">
                <label for="last-name" class="col-form-label">Last Name:</label>
                <input type="text" class="form-control" id="last-name" name="last_name" />
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" />
              </div>
              <div class="mb-3">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" />
              </div> -->
              <div class="mb-3">
                <label for="prog_name" class="form-label">Program</label>
                <select class="form-control" id="prog_name" name="program_id">
                  <?php foreach ($programs as $key => $program): ?>
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
                  <input type="radio" class="btn-check" name="options" id="fifty" autocomplete="off" checked>
                  <label class="btn btn-secondary" for="fifty">Rp.50.000</label>

                  <input type="radio" class="btn-check" name="options" id="hundred" autocomplete="off">
                  <label class="btn btn-secondary" for="hundred">Rp.100.000</label>
                  
                  <input type="radio" class="btn-check" name="options" id="hundred_fifty" autocomplete="off">
                  <label class="btn btn-secondary" for="hundred_fifty">Rp.150.000</label>
                  
                  <input type="radio" class="btn-check" name="options" id="two_hundred" autocomplete="off">
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
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary" name="donate_btn">Donate</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>