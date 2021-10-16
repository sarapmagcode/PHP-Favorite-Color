<?php
    session_start();
    if (isset($_GET["submit"])) {
        // change PHP page
        header("location: ResultColors.php");

        // Session for Color 1
        $color1 = $_GET["color1"];
        if ($color1 != NULL) {
            $_SESSION["1stColor"] = $color1;
        } else {
            $_SESSION["1stColor"] = "No Color Chosen";
        }

        // Session for Color 2
        $color2 = $_GET["color2"];
        if ($color2 != NULL) {
            $_SESSION["2ndColor"] = $color2;
        } else {
            $_SESSION["2ndColor"] = "No Color Chosen";
        }

        // Session for Color 3
        $color3 = $_GET["color3"];
        if ($color3 != NULL) {
            $_SESSION["3rdColor"] = $color3;
        } else {
            $_SESSION["3rdColor"] = "No Color Chosen";
        }
        
        // Session for Color 4
        $color4 = $_GET["color4"];
        if ($color4 != NULL) {
            $_SESSION["4thColor"] = $color4;
        } else {
            $_SESSION["4thColor"] = "No Color Chosen";
        }

        // Session for Color 5
        $color5 = $_GET["color5"];
        if ($color5 != NULL) {
            $_SESSION["5thColor"] = $color5;
        } else {
            $_SESSION["5thColor"] = "No Color Chosen";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Favorite Colors</title>
    </head>
    <body>
        <!-- Start of Container -->
        <div class="container">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
                <!-- Start of sub1 -->
                <div class="sub1">
                    <h1>Enter your favorite colors</h1>
                </div>
                <!-- End of sub1 -->

                <!-- Start of sub2 -->
                <div class="sub2">
                    <div class="left">
                        <?php
                            for ($i = 0; $i < 5; $i++) {
                                ?>
                                    <div class="block"><h2>Favorite color <?php echo ($i + 1); ?></h2></div>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="right">
                        <?php
                            for ($i = 0; $i < 5; $i++) {
                                ?>
                                    <div class="block">
                                        <input type="text" name="color<?php echo ($i + 1);?>" placeholder="Color <?php echo ($i + 1); ?>">
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <!-- End of sub2 -->

                <div class="sub3">
                    <input type="submit" name="submit" value="Send Colors">
                </div>
            </form>
        </div>
        <!-- End of Container -->
    </body>
</html>