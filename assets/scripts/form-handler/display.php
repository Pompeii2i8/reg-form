<?php
session_start();

if (!isset($_SESSION['formData'])) {
    die('No data available.');
}

$formData = $_SESSION['formData'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подтверждение отправки</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="mb-4">Ваша информация была отправлена</h2>
<table class="table table-bordered">
    <tr>
        <th>Last Name</th>
        <td><?php echo htmlspecialchars($formData['lastName']); ?></td>
    </tr>
    <tr>
        <th>First Name</th>
        <td><?php echo htmlspecialchars($formData['firstName']); ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo htmlspecialchars($formData['email']); ?></td>
    </tr>
    <tr>
        <th>Phone Number</th>
        <td><?php echo htmlspecialchars($formData['phoneNumber']); ?></td>
    </tr>
    <tr>
        <th>Message</th>
        <td><?php echo htmlspecialchars($formData['message']); ?></td>
    </tr>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
unset($_SESSION['formData']);
