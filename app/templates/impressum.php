<?php
/**
 * Created by PhpStorm.
 * User: Lukas Bosse
 * Date: 23.12.2017
 * Time: 15:57
 */

?>

<html>
<head>
    <title>FinanzFreunde38</title>
    <!-- Meta Tags -->
    <meta name="author" content="Consulting38">
    <meta name="publisher" content="Lorem ipsum">
    <meta name="copyright" content="Lorem ipsum">
    <meta name="description" content="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata">
    <meta name="keywords" content="Finanzkompass, Versicherung, WWK, Beratung, Consulting, Information, Hilfe, Rente, Investment, Video, ">
    <meta name="page-topic" content="Branche Produkt">
    <meta name="page-type" content="Bericht Reportage">
    <meta name="audience" content="Alle"><meta http-equiv="content-language" content="de">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="resources/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="resources/images/favicon.ico" type="image/x-icon">

    <!-- Remote Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Local Stylesheets -->
    <!-- External Stylesheets -->
    <link type="text/css" rel="stylesheet" href="assets/css/Materialize/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/Materialize/materialIcons.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Custom Stylesheets -->
    <link type="text/css" href="resources/css/main.css" rel="stylesheet">

    <style>
        textarea {
            resize: none;
        }
    </style>

</head>
<body>

<div class="header" style="width: 80%;  position: relative; left: 10%;">

    <!-- Logo -->
    <div class="headerLogo">
        <img class="logo" src="resources/images/logo.png">
    </div>

    <!-- Navbar -->
    <div class="menu">
        <hr>
        <ul class="navbarHeader">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="?view=index#branche">Branche</a></li>
            <li><a href="?view=index#team">Team</a></li>
            <li><a href="#">Archiv</a></li>
            <li><a href="?view=index#kontakt">Kontakt</a></li>
            <li><a href="#">Impressum</a></li>
        </ul>

    </div>

</div>

<div class="pageContent">

    <div class="section">
        <div class="form-group">
            <label for="comment">Impressum:</label>
            <textarea class="form-control" rows="20" id="comment" readonly>
                <?php
                    $file = file_get_contents($this->path . DIRECTORY_SEPARATOR . 'impressum.txt');
                    echo $file;
                ?>
            </textarea>
        </div>
    </div>