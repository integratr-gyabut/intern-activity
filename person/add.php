<?php include('../header.php') ?>
  <div class="container">
    <form class="form" method="POST" action="actions.php">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender">
        </div>
        <div class="mb-3">
            <label for="place_of_birth" class="form-label">Place of Birth</label>
            <input type="text" class="form-control" id="place_of_birth" name="place_of_birth">
        </div>
        <div class="mb-3">
            <label for="place_of_birth" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="place_of_birth" name="birthday">
        </div>
        <input type="submit" name="submit_person" value="Store Person" class="btn btn-primary">
    </form>
  </div>
<?php include('../footer.php') ?>