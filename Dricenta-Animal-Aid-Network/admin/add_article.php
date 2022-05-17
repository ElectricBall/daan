<?php include('../path.php'); ?>
<?php include(ROOT_PATH . '/controller/article.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAAN - Admin|Add New</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <!-- Navbar -->
  <?php include(ROOT_PATH . "/include/navbar_admin.php"); ?>

  <section class="p-5">
    <div class="container">
      <div class="row text-center g-4 my-4" id="article">
        <h1>Add Article</h1>
        <?php include(ROOT_PATH . '/helper/form_errors.php'); ?>
        <!-- login form -->
        <div class="container lead">
          <form action="add_article.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="art_image" class="form-label">Image</label>
              <input type="file" class="form-control" id="art_image" name="image" value="<?php echo $image; ?>">
            </div>
            <div class="mb-3">
              <label for="art_author" class="form-label">Author</label>
              <input type="text" class="form-control" id="art_author" name="author" value="<?php echo $author; ?>">
            </div>
            <div class="mb-3">
              <label for="art_title" class="form-label">Title</label>
              <input type="text" class="form-control" id="art_title" name="title" value="<?php echo $title; ?>">
            </div>
            <div class="mb-3">
              <label for="art_con" class="form-label">Content</label>
              <textarea rows="20" cols="50" class="form-control" id="art_con" name="content"><?php echo $content; ?></textarea>
            </div>
            <a href="index.php" role="button" class="btn btn-dark">Cancel</a>
            <button type="submit" class="btn btn-primary" name="add_btn">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>