<?php session_start(); ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Unidle</title>
        <link rel="stylesheet" href="styles.css" />
        <script src="js/app.js" defer></script>
    </head>
    <body>
        <main id="page-c">
            <?php if (isset($_SESSION["user_id"])) {
                header("Location: index.php");
            } else {
                echo "<p>Connection...</p>";
            } ?>
        </main>
    </body>
</html>
