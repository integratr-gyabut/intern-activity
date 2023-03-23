<?php

include_once("../connect.php");

if (isset($_POST['submit_person'])) {
    $name = $_POST['name'];
    $place_of_birth = $_POST['place_of_birth'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];

    $sql = "INSERT into persons (name, place_of_birth, birthday, gender) VALUES ('$name', '$place_of_birth', '$birthday', '$gender')";

    $query = $conn->query($sql) or die($conn->error);

    $_SESSION['success'] = "Person successfully added";
    header("Location: ../person.php");
}
