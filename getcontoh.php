<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_GET['name'])) {
            $name = $_GET ['name'];
            echo "Halo,$name!";
        } else {
            echo "Silahkan masukan nama melalui URL";
        }
        
    ?>
</body>
</html>