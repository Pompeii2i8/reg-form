<?php
session_start();

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

$file = $_SERVER['DOCUMENT_ROOT'] . '/assets/storage/data/form_data.csv';
$fileHandle = fopen($file, 'a');
$data = [$lastName, $firstName, $email, $phoneNumber, $message];
fputcsv($fileHandle, $data);
fclose($fileHandle);

$_SESSION['formData'] = [
    'lastName' => $lastName,
    'firstName' => $firstName,
    'email' => $email,
    'phoneNumber' => $phoneNumber,
    'message' => $message
];


header('Location: form.html?success=true');

header("Location: display.php");
exit();
