<?php include('../path.php'); 
  include(ROOT_PATH . '/database/db.php');
  include(ROOT_PATH . '/controller/program_handler.php'); 
  include(ROOT_PATH . '/controller/news_handler.php');
  include(ROOT_PATH . '/controller/event_handler.php');
  include(ROOT_PATH . '/controller/article_handler.php');
  include(ROOT_PATH . '/controller/donate.php');
  include(ROOT_PATH . '/controller/user_handler.php');

  // dd($act_prog);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAAN - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <!-- Navbar -->
  <?php include("../include/navbar_admin.php"); ?>

  <section class="p-5">
    
    <!-- display session messages -->
    <?php include(ROOT_PATH . "/include/message.php"); ?>
    
    <!-- Program -->
    <div class="container">
      <div class="row text-center g-4 my-4" id="programs">
        <h1>Programs</h1>
          <div class="container">
            <a href="add_program.php" role="button" class="btn btn-primary">Add New Program</a>
          </div>
        <table>
          <thead>
            <th>Program ID</th>
            <th>Organization ID</th>
            <th>Name</th>
            <th>Date</th>
          </thead>
          <tbody>
            <?php foreach ($programs as $key => $program): ?>
              <tr>
                <td><?php echo $program['program_id']; ?></td>
                <td><?php echo $program['organization_id']; ?></td>
                <td><?php echo $program['name']; ?></td>
                <td><?php echo $program['date']; ?></td>
                <td><a href="edit_program.php?prog_id=<?php echo $program['program_id'] ?>" class="btn-sm btn-success">edit</a></td>
                <td><a href="index.php?prog_del_id=<?php echo $program['program_id'] ?>" class="btn-sm btn-danger">delete</a></td>
                <?php if($program['active'] && $program['active'] == 1): ?>
                  <td><a href="index.php?active=0&p_id=<?php echo $program['program_id']; ?>" class="btn-sm btn-primary" name="active">Active</a></td>
                <?php else: ?>
                  <td><a href="index.php?active=1&p_id=<?php echo $program['program_id']; ?>" class="btn-sm btn-dark" name="active">inactive</a></td>
                <?php endif; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- News -->
    <div class="container">
      <div class="row text-center g-4 my-4" id="news">
          <h1>News</h1>
            <div class="container">
              <a href="add_news.php" role="button" class="btn btn-primary">Add News</a>
            </div>
          <table>
            <thead>
              <th>News ID</th>
              <th>Author</th>
              <th>Title</th>
              <th>Date</th>
            </thead>
            <tbody>
              <?php foreach ($news as $key => $new): ?>
                <tr>
                  <td><?php echo $new['news_id']; ?></td>
                  <td><?php echo $new['author']; ?></td>
                  <td><?php echo $new['title']; ?></td>
                  <td><?php echo $new['date']; ?></td>
                  <td><a href="edit_news.php?news_id=<?php echo $new['news_id'] ?>" class="btn-sm btn-success">edit</a></td>
                  <td><a href="index.php?news_del_id=<?php echo $new['news_id'] ?>" class="btn-sm btn-danger">delete</a></td>
                  <?php if($new['published'] && $new['published'] == 1): ?>
                    <td><a href="index.php?published=0&n_id=<?php echo $new['news_id']; ?>" class="btn-sm btn-primary" name="published">Published</a></td>
                  <?php else: ?>
                    <td><a href="index.php?published=1&n_id=<?php echo $new['news_id']; ?>" class="btn-sm btn-dark" name="published">unpublished</a></td>
                  <?php endif; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Events -->
    <div class="container">
      <div class="row text-center g-4 my-4" id="events">
          <h1>Events</h1>
          <div class="container">
            <a href="add_event.php" role="button" class="btn btn-primary">Add New Event</a>
          </div>
          <table>
            <thead>
              <th>Event ID</th>
              <th>Organization ID</th>
              <th>Name</th>
              <th>Date</th>
            </thead>
            <tbody>
              <?php foreach ($events as $key => $event): ?>
                <tr>
                  <td><?php echo $key + 1; ?></td>
                  <td><?php echo $event['organization_id']; ?></td>
                  <td><?php echo $event['name']; ?></td>
                  <td><?php echo $event['date']; ?></td>
                  <td><a href="edit_event.php?event_id=<?php echo $event['event_id'] ?>" class="btn-sm btn-success">edit</a></td>
                  <td><a href="index.php?event_del_id=<?php echo $event['event_id'] ?>" class="btn-sm btn-danger">delete</a></td>
                  <?php if($event['active'] && $event['active'] == 1): ?>
                    <td><a href="index.php?active=0&e_id=<?php echo $event['event_id']; ?>" class="btn-sm btn-primary" name="active">Active</a></td>
                  <?php else: ?>
                    <td><a href="index.php?active=1&e_id=<?php echo $event['event_id']; ?>" class="btn-sm btn-dark" name="active">inactive</a></td>
                  <?php endif; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Articles -->
    <div class="container">
      <div class="row text-center g-4 my-4" id="articles">
          <h1>Articles</h1>
            <div class="container">
              <a href="add_article.php" role="button" class="btn btn-primary">Add New article</a>
            </div>
          <table>
            <thead>
              <th>Article ID</th>
              <th>Author</th>
              <th>Title</th>
              <th>Date</th>
            </thead>
            <tbody>
              <?php foreach ($articles as $key => $article): ?>
                <tr>
                  <td><?php echo $article['article_id']; ?></td>
                  <td><?php echo $article['author']; ?></td>
                  <td><?php echo $article['title']; ?></td>
                  <td><?php echo $article['date']; ?></td>
                  <td><a href="edit_article.php?article_id=<?php echo $article['article_id'] ?>" class="btn-sm btn-success">edit</a></td>
                  <td><a href="index.php?article_del_id=<?php echo $article['article_id'] ?>" class="btn-sm btn-danger">delete</a></td>
                  <?php if($article['published'] && $article['published'] == 1): ?>
                    <td><a href="index.php?published=0&a_id=<?php echo $article['article_id']; ?>" class="btn-sm btn-primary" name="published">Published</a></td>
                  <?php else: ?>
                    <td><a href="index.php?published=1&a_id=<?php echo $article['article_id']; ?>" class="btn-sm btn-dark" name="published">unpublished</a></td>
                  <?php endif; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Donation -->
    <div class="container">
      <div class="row text-center g-4 my-4" id="donations">
          <h1>Donation</h1>
          <table>
            <thead>
              <th>Donation ID</th>
              <th>Program ID</th>
              <th>User Id</th>
              <th>Amount</th>
              <th>Date</th>
            </thead>
            <tbody>
              <?php foreach ($donations as $key => $donation): ?>
                <tr>
                  <td><?php echo $donation['donation_id']; ?></td>
                  <td><?php echo $donation['program_id']; ?></td>
                  <td><?php echo $donation['user_id']; ?></td>
                  <td><?php echo $donation['amount']; ?></td>
                  <td><?php echo $donation['date']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    
    <!-- User -->
    <div class="container">
      <div class="row text-center g-4 my-4" id="users">
          <h1>User</h1>
          <table>
            <thead>
              <th>User ID</th>
              <th>Full Name</th>
              <!-- <th>Password</th> -->
              <th>Email</th>
              <th>Phone</th>
              <th>Created At</th>
            </thead>
            <tbody>
              <?php foreach ($users as $key => $user): ?>
                <tr>
                  <td><?php echo $user['user_id']; ?></td>
                  <td><?php echo $user['full_name']; ?></td>
                  <!-- <td><?php echo $user['password']; ?></td> -->
                  <td><?php echo $user['email']; ?></td>
                  <td><?php echo $user['phone']; ?></td>
                  <td><?php echo $user['created_at']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </section>
</body>
</html>