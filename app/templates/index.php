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
            <li><a href="#branche">Branche</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#">Archiv</a></li>
            <li><a href="#kontakt">Kontakt</a></li>
            <li><a href="?view=impressum">Impressum</a></li>
        </ul>

    </div>

</div>

<!-- Image/Video -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 80vh;">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="http://www.chroface.de/user-content/templates/base/downloads/hintergrundbilder/sonnenuntergang-winter-landschaft-natur-hintergrundbild.jpg">
        </div>

        <div class="item">
            <img src="http://hd-hintergrundbilder.com/natur/de-zon-komt-op.jpg">
        </div>

        <div class="item">
            <img src="http://www.chroface.de/user-content/templates/base/downloads/hintergrundbilder/sonnenuntergang-winter-landschaft-natur-hintergrundbild.jpg">
        </div>
    </div>

</div>

<div class="pageContent">

    <!-- Sparten -->
    <div id="branche" class="section" style="padding-bottom: 0;">

        <div class="strike">
            <span><h2>Für jeden das richtige</h2></span>
        </div>

        <div class="row">
            <div class="col-md-2" style="padding-left: 0;">
                <div class="thumbnail">
                    <img src="assets/images/Angestellter.jpg" alt="Angestellt" onclick="loadContent('Testfile')" data-toggle="collapse" data-target="#varContent" style="width:100%">
                    <div class="caption" style="height: 35px;">
                        <p><i class="verticalIcons material-icons">chevron_right</i>Angestellt</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="padding-left: 0;">
                <div class="thumbnail">
                    <img src="assets/images/Selbstständiger.jpg" onclick="loadContent('Testfile')"alt="Selbständig" data-toggle="collapse" data-target="#varContent" style="width:100%">
                    <div class="caption" style="height: 35px;">
                        <p><i class="verticalIcons material-icons">chevron_right</i>Selbständig</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="padding-left: 0;">
                <div class="thumbnail">
                    <img src="assets/images/Entrepreneur.jpg" alt="Unternehmer" onclick="loadContent('Testfile')" data-toggle="collapse" data-target="#varContent" style="width:100%">
                    <div class="caption" style="height: 35px;">
                        <p><i class="verticalIcons material-icons">chevron_right</i>Unternehmer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="padding-left: 0;">
                <div class="thumbnail">
                    <img src="assets/images/Student.jpg" alt="Student" onclick="loadContent('Testfile')" data-toggle="collapse" data-target="#varContent" style="width:100%">
                    <div class="caption" style="height: 35px;">
                        <p><i class="verticalIcons material-icons">chevron_right</i>Student</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="padding-left: 0;">
                <div class="thumbnail">
                    <img src="assets/images/Auszubildener.jpg" onclick="loadContent('Testfile')"alt="Auszubildener" data-toggle="collapse" data-target="#varContent" style="width:100%">
                    <div class="caption" style="height: 35px;">
                        <p><i class="verticalIcons material-icons">chevron_right</i>Auszubildener</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Variable Content -->
    <div id="varContent" class="collapse">
    </div>

    <!-- Quote -->

    <div class="row">
        <blockquote>
            <p>Es ist ein Schönheitsfehler des Kapitalismus, daß er zwar allen die gleiche Chance gibt, geschäftstüchtig zu sein, es aber unterlassen hat, dafür zu sorgen, daß alle auch die gleiche Geschäftstüchtigkeit besitzen, um sie wahrzunehmen.</p>
            <footer>Sigmund Graff, Aphoristiker und Bühnenschriftsteller (1898 - 1979)</footer>
        </blockquote>
    </div>

    <!-- Team Section -->
    <div id="team" class="section">

        <div class="strike">
            <span><h2>Das Team</h2></span>
        </div>

        <div class="team card-panel">
            <div class="card-content">
                <div class="row" style="padding-top: 5px;">
                    <div class=col-sm-3 col-md-3" align="center">
                    <div class="card teamItem">
                        <div class="card-image">
                            <img src="https://portal.uni-freiburg.de/husserlarchiv/personen-en/resolveuid/5e079a2a5a596a5a22e15e36d4ef8c04" width="200" height="200">
                            <a class="btn-floating halfway-fab waves-effect waves-light red" data-toggle="popover" title="Henning Vietzke"><i class="material-icons">assignment_ind</i></a>
                        </div>
                        <div class="card-content">
                            <p style="text-align: left;">Henning Vietzke</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3" align="center">
                    <div class="card teamItem">
                        <div class="card-image">
                            <img src="https://portal.uni-freiburg.de/husserlarchiv/personen-en/resolveuid/5e079a2a5a596a5a22e15e36d4ef8c04" width="200" height="200">
                            <a class="btn-floating halfway-fab waves-effect waves-light red" data-toggle="popover" title="Felix Knof"><i class="material-icons">assignment_ind</i></a>
                        </div>
                        <div class="card-content">
                            <p style="text-align: left;">Felix Knof</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3" align="center">
                    <div class="card teamItem">
                        <div class="card-image">
                            <img src="https://portal.uni-freiburg.de/husserlarchiv/personen-en/resolveuid/5e079a2a5a596a5a22e15e36d4ef8c04" width="200" height="200">
                            <a class="btn-floating halfway-fab waves-effect waves-light red" data-toggle="popover" title="Marcel Schomburg"><i class="material-icons">assignment_ind</i></a>
                        </div>
                        <div class="card-content">
                            <p style="text-align: left;">Marcel Schomburg</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3" align="center">
                    <div class="card teamItem">
                        <div class="card-image">
                            <img src="https://portal.uni-freiburg.de/husserlarchiv/personen-en/resolveuid/5e079a2a5a596a5a22e15e36d4ef8c04" width="200" height="200">
                            <a class="btn-floating halfway-fab waves-effect waves-light red" data-toggle="popover" title="Hendrik Schulze"><i class="material-icons">assignment_ind</i></a>
                        </div>
                        <div class="card-content">
                            <p style="text-align: left;">Hendrik Schulze</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kontaktformular -->
<div id="kontakt" class="section" style="padding-top: 0; padding-bottom: 0;">

    <div class="strike">
        <span><h2>Kontakt</h2></span>
    </div>

    <form class="formular">
        <div class="card-panel white">
            <div class="card-content blue-text">
                <div class="row" style="margin-top: 5px;">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">contact_phone</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Telefonnummer</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">contact_mail</i>
                        <input id="icon_prefix" type="email" class="validate">
                        <label for="icon_prefix">E-Mail</label>
                    </div>
                    <div class="input-field col s6">
                        <a class="waves-effect waves-light btn">Absenden</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>