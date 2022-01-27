<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Php Dischi</title>
</head>
<body>
    <div class="container">
        <header>
            <img class="logo" src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>

        <div class="discs-container">
            <?php foreach($database as $disc) { ?>
                <!-- Template single disc -->
                <div class="disc">
                    <img src="<?php echo $disc['poster']; ?>" />

                    <h3><?php echo $disc['title']; ?></h3>
                    <small><?php echo $disc['author']; ?></small>
                    <strong><?php echo $disc['year']; ?></strong>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>