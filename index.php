<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
       /*Wie mache ich das Menu das es einklappt?*/

    </style>
</head>
<body>

    <?php echo "Hello world!"; ?>

    <!--Hier kommt das Formular-->

    <html>


<form action="lieblingstierResult.php" method="post">
    <label for="lieblingstier">Dein Lieblingstier ist: </label>
        <select name="lieblingstier" id="lieblingstier">
        <option value="Hund">Hund</option>
        <option value="Katze">Katze</option>
        <option value="Tiger">Tiger</option>
        <option value="Bambi">Bambi</option> 
        </select>
<input type="submit">
</form>

</body>
</html>
</html>