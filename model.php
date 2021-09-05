<?php

$server = "localhost";
$user = "user";
$pass = "";
$db = "MyDB";

$conn = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)
    ");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
