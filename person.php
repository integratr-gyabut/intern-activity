<?php include('header.php') ?>
  <div class="container">
    <?php 
    if (isset($_SESSION['success'])) {
        echo '<div class="alert alert-success" role="alert">
                    ' . $_SESSION['success'] . '
                </div>';
        unset($_SESSION['success']);
    }
    ?>
    <a class="btn btn-primary" href="person/add.php">Add person</a>
  </div>
<?php include('footer.php') ?>