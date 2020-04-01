<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Ilya Goosens, Robin Van de Velde, Michiel Vandezande" name="author">


    <link href="../favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="../favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="../favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link color="#55bbe2" href="../favicons/safari-pinned-tab.svg" rel="mask-icon">
    <link href="../favicons/favicon.ico" rel="shortcut icon">

    <meta content="#55bbe2" name="msapplication-TileColor">
    <meta content="../favicons/browserconfig.xml" name="msapplication-config">
    <meta content="#55bbe2" name="theme-color">

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../css/PHP.css">
    <title>Formulierverwerking</title>
</head>

<body>
<h1>Formulierverwerking</h1>
<div class="rand"><h2>Dit is wat u hebt ingestuurd.</h2>

    <?php
    if (isset($_POST["gebruikersnaam"]) && $_POST["gebruikersnaam"] != "") {
        echo "<p> Ingevuld bij naam: " . $_POST["gebruikersnaam"] . "</p>\n";
    }

    if (isset($_POST["email"]) && $_POST["email"] != "") {
        echo "<p> Ingevuld bij email: " . $_POST["email"] . "</p>\n";
    }

    if (isset($_POST["bericht"]) && $_POST["bericht"] != "") {
        echo "<p> Ingevuld bij bericht: " . $_POST["bericht"] . "</p>\n";
    }
    if (isset($_POST["rating"]) && $_POST["rating"] != "") {
        echo "<p> Ingevuld bij wat vond u van deze site: " . $_POST["rating"] . "</p>\n";
    }

    ?>
<p>Om terug te keren naar de onepager: <a href="../index.html">klik hier.</a></p>
</div>

</body>

</html>