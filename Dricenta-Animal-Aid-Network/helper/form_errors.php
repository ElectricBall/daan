<?php if (count($errors) > 0): ?>
  <div class="container">
    <div class="card error-body">
      <div class="card-body error">
        <?php foreach ($errors as $error): ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
  