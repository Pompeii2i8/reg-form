<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $email = htmlspecialchars($_POST['email']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h1>Data</h1>";
    echo "Last Name: " . $lastName . "<br>";
    echo "First Name: " . $firstName . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone Number: " . $phoneNumber . "<br>";
    echo "Message: " . $message . "<br>";

    $filePath = '/assets/storage/data/form_data.csv';

    $file = fopen($filePath, 'a');
    $data = [$lastName, $firstName, $email, $phoneNumber, $message];
    fputcsv($file, $data);
    fclose($file);
}
