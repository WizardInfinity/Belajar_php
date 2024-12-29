<!-- array numerik -->
<?php 
$shippuden = [
    
    "Nama" => "Naruto",
    "Clan" => "Uzumaki",
    "Desa Asal" => "Konohagakure",
    "Tanggal Lahir" => "10101999"
];

echo "<b>Array Numerik</b>";
echo "<br>";
echo $shippuden ["Nama"];
echo "<br>";
echo $shippuden ["Clan"];
echo "<br>";
echo "<br>";

// array asosiatif
$shippudens = [
    [
        "Nama" => "Naruto",
        "Clan" => "Uzumaki",
        "Desa Asal" => "Konohagakure",
        "Tanggal Lahir" => "10-10-1999"
    ],
    [
        "Nama" => "Sasuke",
        "Clan" => "Uchiha",
        "Desa Asal" => "Konohagakure",
        "Tanggal Lahir" => "23-07-1999"
    ]
];

echo "<b>Array Asosiatif</b>";
echo "<br>";
echo $shippudens [0]["Tanggal Lahir"];
echo "<br>";
echo $shippudens [1]["Desa Asal"];
?>