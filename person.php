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
    <?php
        $query = $conn->query("SELECT * FROM persons");
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Birthday</th>
                <th scope="col">Birthplace</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($person = $query->fetch_assoc()) {
            echo "<tr>
                <td>" . $person['id'] . "</td>
                <td>" . $person['name'] . "</td>
                <td>" . $person['gender'] . "</td>
                <td>" . $person['birthday'] . "</td>
                <td>" . $person['place_of_birth'] . "</td>
                <td></td>
            </tr>";
        }

        $conn->close();
        ?>
        </tbody>
        </table>
  </div>
<?php include('footer.php') ?>