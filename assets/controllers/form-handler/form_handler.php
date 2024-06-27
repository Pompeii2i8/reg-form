<?php
session_start();

$_SESSION['success'] = true;

header("Location: /../index.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die();
}

if (
    !isset($_POST['lastName']) ||
    !isset($_POST['firstName']) ||
    !isset($_POST['email']) ||
    !isset($_POST['phoneNumber'])
) {
    die();
}

$lastName = htmlspecialchars($_POST['lastName']);
$firstName = htmlspecialchars($_POST['firstName']);
$email = htmlspecialchars($_POST['email']);
$phoneNumber = htmlspecialchars($_POST['phoneNumber']);
$message = htmlspecialchars($_POST['message']);

$headers = ['Last Name', 'First Name', 'Email', 'Phone Number', 'Message'];
$data = [$lastName, $firstName, $email, $phoneNumber, $message];

$file = $_SERVER['DOCUMENT_ROOT'] . '/assets/storage/data/form_data.csv';

if (!file_exists($file)) {
    $fileHandle = fopen($file, 'w');
    fputcsv($fileHandle, $headers);
} else {
    $fileHandle = fopen($file, 'a');
}

fputcsv($fileHandle, $data);
fclose($fileHandle);

exit;
