<?php
require_once "../functions/functions.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $data = "Name: $name | Email: $email | Message: $message\n";
    file_put_contents("../data/data.txt", $data, FILE_APPEND);

    redirect("../index.php");
}
?>

<form action="" method="post">
    <label for="name">meno:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="message">sprava:</label>
    <textarea name="message" id="message" required></textarea>

    <button type="submit" name="submit">odoslat</button>
</form>