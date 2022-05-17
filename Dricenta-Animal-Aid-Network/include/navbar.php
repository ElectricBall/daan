<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-info navbar-light py-3 fixed-top">
        <div class="container">
            <a href="<?php echo BASE_URL . '/index.php#' ?>" class="navbar-brand">DAAN</a>

            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse lead" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="navbar-item">
                        <a href="<?php echo BASE_URL . '/index.php#home' ?>" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo BASE_URL . '/index.php#aboutUs' ?>" class="nav-link">About Us</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo BASE_URL . '/index.php#programs' ?>" class="nav-link">Programs</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo BASE_URL . '/index.php#newsEvents' ?>" class="nav-link">News & Events</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo BASE_URL . '/index.php#articles' ?>" class="nav-link">Articles</a>
                    </li>
                    <li class="navbar-item btn-info rounded">
                        <a href="<?php echo BASE_URL . '/donate.php' ?>" class="nav-link">Donate</a>
                    </li>
                    <?php if (isset($_SESSION['id'])): ?>
                      <li class="navbar-item">
                          <a href="<?php echo BASE_URL . 'controller/logout.php' ?>" class="nav-link">Logout</a>
                      </li>
                    <?php else: ?>
                      <li class="navbar-item">
                          <a href="<?php echo BASE_URL . 'user/login.php' ?>" class="nav-link">Sign In</a>
                      </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>