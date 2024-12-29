<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date/Time</title>
    <style>
        h2{
            color:cyan;
        }
        body{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <?php
    //fungsi date()
    echo "<b><h2>DATE<br></b></h2>";
    $TanggalHariIni = date('Y-m-d');
    echo "Tanggal Saat Ini: $TanggalHariIni<br><hr>";

    //fungsi time()
    echo "<b><h2>TIME<br></b></h2>";
    $timestamp = time();
    $date = date("H:i:s", $timestamp);
    echo "Waktu saat ini: " . $date;
    echo "<br><hr>";

    //fungsi mktime()
    echo "<b><h2>MKTIME<br></b></h2>";
    $timestamp = mktime(20, 00, 00, 8, 10, 2023);
    $date = date("Y-m-d H:i:s", $timestamp);
    echo "Waktu yang sesuai: " . $date;
    echo "<br><hr>";

    //fungsi strtotime()
    echo "<b><h2>STRTOTIME<br></b></h2>";
    $datetime_string = "2023 August 29 10:00:00";
    $timestamp_datetime = strtotime ($datetime_string);
    echo "Timestamp : ".$datetime_string;
    echo "<br><hr>";

    ?>
</body>
</html>