<!DOCTYPE html>
<head>
    <?php require "logic.php"; ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body id="<?php echo $image?>">
    <div>
        <p>
            <?php date_default_timezone_set("America/New_York");
            echo date("h:i:s A"); ?>
        </p>
    </div>
</body>
</html>