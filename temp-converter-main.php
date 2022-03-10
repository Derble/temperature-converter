<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Your style sheet -->
    <link rel="stylesheet" href="css/style.css">
    <title>Temperature Converter</title>
</head>

<body>
    <!-- navbar, functions, and hero section -->
    <?php
    require "inc/navbar.inc.php";
    require "inc/functions.inc.php";
    require "inc/hero.inc.html";
    ?>

    <?php
    // Logic to check for POST and grab data from $_POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $originalTemperature = $_POST['originaltemp'];
        $originalUnit = $_POST['originalunit'];
        $conversionUnit = $_POST['conversionunit'];
        //$convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);

        if (is_numeric($_POST['originaltemp']) && $originalUnit != "--Select--" && $conversionUnit != "--Select--") {
            $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);
            //$newtemp is returned and stored in $convertedTemp
        } else {
            echo '<div class="alert alert-warning mx-5 my-3" role="alert">Unfortunately, we didn\'t receive all the info we needed. Please enter the original numeric temperature, original temperature unit, and the temperature unit that you would like to convert to.</div>';
        }
    } // end if
    ?>

    <!-- Form -->
    <?php require "inc/form.inc.php"; ?>

    <!-- Two columns with temperature formulas and info -->
    <?php require "inc/content.inc.php"; ?>

    <!-- include footer -->
    <?php require "inc/footer.inc.php"; ?>

    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>