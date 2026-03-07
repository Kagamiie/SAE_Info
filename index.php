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
                echo '
                    <h1>Uni<span style="color: blue">\'.</span>dle</h1>
                    <div class="base">
                        <a href="#page1.php">pages 1</a>
                        <a href="#page2.php">pages 2</a>
                        <a href="#page3.php">pages 3</a>
                    </div>
                ';
            } else {
                echo '
                    <p>Veuillez vous connecter.</p>
                    <a class="signup-btn" href="sign_up.php" aria-label="Sign up">
                      Sign up
                      <kbd>S</kbd>
                    </a>
                ';
            } ?>
        </main>
    </body>
</html>
