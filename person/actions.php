<?php

session_start();
include_once("../connect.php");

$name = $_POST['name'];
$place_of_birth = $_POST['place_of_birth'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];

if (isset($_POST['submit_person'])) {
    $sql = "INSERT into persons (name, place_of_birth, birthday, gender) VALUES ('$name', '$place_of_birth', '$birthday', '$gender')";

    $query = $conn->query($sql) or die($conn->error);

    $_SESSION['success'] = "Person successfully added";
} elseif (isset($_POST['update_person'])) {
    $id = $_POST['id'];
    $sql = "UPDATE persons set name='$name',place_of_birth='$place_of_birth',birthday='$birthday',gender='$gender' where id=$id";

    $query = $conn->query($sql) or die($conn->error);
    $_SESSION['success'] = "Person successfully updated";
}

header("Location: ../person.php");
exit();
