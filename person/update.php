<?php
include('../header.php');
$query = $conn->query("SELECT * FROM persons where id=" . $_GET['id']) or die($conn->error);
$result = $query->fetch_assoc();
?>
  <div class="container">
    <form class="form" method="POST" action="actions.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $result['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $result['gender'] ?>">
        </div>
        <div class="mb-3">
            <label for="place_of_birth" class="form-label">Place of Birth</label>
            <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="<?php echo $result['place_of_birth'] ?>">
        </div>
        <div class="mb-3">
            <label for="place_of_birth" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="place_of_birth" name="birthday" value="<?php echo $result['birthday'] ?>">
        </div>
        <input type="submit" name="update_person" value="Update Person" class="btn btn-primary">
    </form>
  </div>
<?php include('../footer.php') ?>