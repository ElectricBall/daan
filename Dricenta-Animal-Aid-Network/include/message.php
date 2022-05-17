<?php if (isset($_SESSION['message'])): ?>
  <div class="container">
    <div class="card <?php echo($_SESSION['type']); ?>">
      <div class="card-body success">
        <li><?php echo $_SESSION['message']; ?></li>
        <?php 
          unset($_SESSION['message']);
          unset($_SESSION['type']);
        ?>
      </div>
    </div>
  </div>
<?php endif; ?>
  