<?php
// riporto il file php contenente l array dei dischi
require_once __DIR__ . '/database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel='stylesheet' href='css/style.css'>
    <title>Spoti-phyp</title>
</head>
<body>
    <div class="webapp">
        <div class="header">
            <img src="img/logo-spotify.png" alt="">
        </div>
        <div class="main">
            <!-- strutturo il foresch per ciclare le info delle card -->
            <?php foreach ($database as $disk) { ?>
            <div class="card">
                <img src= <?php echo $disk['poster'] ?> alt="">
                <div class="title"><?php echo $disk['title'] ?></div>
                <div class="author"><?php echo $disk['author'] ?></div>
                <div class="year"><?php echo $disk['year'] ?></div>
            </div>
            <?php } ?>
        </div>
    </div>
    
</body>
</html>