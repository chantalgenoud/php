<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ergebnis</title>
</head>
<body>

<html>
<body>


<!-- Dein Lieblingstier ist <?php echo $_POST["lieblingstier"];?>
-->


<?php 

session_start();
$lieblingstier = $_POST["lieblingstier"];

$_SESSION["lieblingstier"] = $lieblingstier;






function printLieblingstier() {

    $lieblingstier = $_SESSION["lieblingstier"];

    echo "<div>";

    switch ($lieblingstier) {
        case "Hund":
            echo "<img src='hund.jpeg' style='width:80%'>";
            break;

        case "Katze":
            echo "<img src='katze.jpg' style='width:80%'>";
            break;

        case "Tiger":
            echo "<img src='tiger.jpeg' style='width:80%'>";
            break;

        case "Bambi":
            echo "<img src='bambi.jpg' style='width:80%'>";
            break;
    }

    echo "</div>";
}



printLieblingstier(); 
?> 

</body>
</html>
