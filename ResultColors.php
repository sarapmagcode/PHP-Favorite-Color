<?php
    session_start();
    $color1 = $_SESSION['1stColor'];
    $color2 = $_SESSION['2ndColor'];
    $color3 = $_SESSION['3rdColor'];
    $color4 = $_SESSION['4thColor'];
    $color5 = $_SESSION['5thColor'];
    $colors = array($color1, $color2, $color3, $color4, $color5);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Results Color</title>
    </head>
    <body>
        <div class="container">
            <div class="sub1">
                <h1>Results</h1>
            </div>
            <div class="sub2">
                <div class="left">
                    <?php
                        for ($i = 0; $i < 5; $i++) {
                            ?>
                                <div class="block"><h2>My Favorite Color <?php echo ($i + 1); ?></h2></div>
                            <?php
                        }
                    ?>
                </div>
                <div class="right">
                    <?php
                        for ($i = 0; $i < 5; $i++) {
                            ?>
                                <div class="block">
                                    <h2><?php echo $colors[$i]; ?></h2>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>