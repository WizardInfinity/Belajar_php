<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    
<style>
    .abu-abu{
        background-color: gray;
    }
</style>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i=1; $i<=6; $i++):?>
        <?php if($i % 2 == 0): ?>
            <tr class="abu-abu">
        <?php else : ?>
            <tr>
        <?php endif;?>
            <?php for ($j=1; $j<=6; $j++):?>
                <td><?= "$i,$j";?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
</table>
</body>
</html>