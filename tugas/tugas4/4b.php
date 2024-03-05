<?php

$komputer = ["Motherboard", "Processor", "Hard Disk", "Pc Coller", "VGA Card", "SSD"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.php</title>
</head>

<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($komputer as $k) : ?>
            <li><?= $k ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
    $komputer[] = "Card Reader";
    $komputer[] = "Modem";
    sort($komputer);
    ?>

    <h3>Macam-macam perangkat keras komputer baru</h3>
<ol>
    <?php foreach ($komputer as $k) : ?>
        <li><?= $k ?></li>
    <?php endforeach; ?>
</ol>
</body>
</html>