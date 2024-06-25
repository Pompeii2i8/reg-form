<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die();
}

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

$filePath = dirname(__FILE__) . '/../storage/data/form_data.csv';

// Check if the directory exists, if not, create it
if (!is_dir(dirname($filePath))) {
    mkdir(dirname($filePath), 0777, true);
}

$file = fopen($filePath, 'a');
if ($file === false) {
    die("Error opening the file: " . $filePath);
}

$data = [$lastName, $firstName, $email, $phoneNumber, $message];
fputcsv($file, $data);
fclose($file);
