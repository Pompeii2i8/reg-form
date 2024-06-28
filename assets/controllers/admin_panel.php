<?php
$file = $_SERVER['DOCUMENT_ROOT'] . '/assets/storage/data/form_data.csv';

$data = [];

if (file_exists($file)) {
    $fileHandle = fopen($file, 'r');

    while (($row = fgetcsv($fileHandle, 1000, ",")) !== FALSE) {
        $data[] = $row;
    }

    fclose($fileHandle);
}

include './../views/display_data.php';
