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

    <div class="pageContent">

    <div class="header">

        <!-- Logo -->
        <div class="headerLogo">
            <img class="logo" src="resources/images/logo.png">
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-default menu">

                <ul class="nav navbar-nav navbarHeader">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#branche">Branche</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                    <li><a href="#">Impressum</a></li>
                </ul>

        </nav>

    </div>

    <!-- Image/Video -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 75vh;">

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

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

        <!-- Sparten -->
        <div id="branche" class="section" style="padding-bottom: 0;">

            <div class="row">
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="assets/images/Angestellter.jpg" alt="Angestellt" onclick="loadContent('Testfile')" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p>Angestellt</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                            <img src="assets/images/Selbstständiger.jpg" onclick="loadContent('Testfile')"alt="Selbständig" style="width:100%">
                            <div class="caption" style="height: 35px;">
                                <p>Selbständig</p>
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="assets/images/Entrepreneur.jpg" alt="Unternehmer" onclick="loadContent('Testfile')" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p>Unternehmer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="assets/images/Investor.jpg" onclick="loadContent('Testfile')"alt="Investor" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p>Investor</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="assets/images/Student.jpg" alt="Student" onclick="loadContent('Testfile')" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p>Student</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="assets/images/Auszubildener.jpg" onclick="loadContent('Testfile')"alt="Auszubildener" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p>Auszubildener</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Variable Content -->
        <div id="varContent" class="collapse">

        </div>

        <!-- Team Section -->
        <div class="section">
                <div class="team card-panel white">
                    <div class="card-content" style="color: #0548FF;">
                        <span class="card-title section-title"><b>Das Team</b></span>
                        <div class="row" style="padding-top: 5px;">
                            <div class=col-sm-3 col-md-3" align="center">
                                <div class="card teamItem">
                                    <div class="card-image">
                                        <img src="https://portal.uni-freiburg.de/husserlarchiv/personen-en/resolveuid/5e079a2a5a596a5a22e15e36d4ef8c04" width="200" height="200">
                                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">assignment_ind</i></a>
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
                                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">assignment_ind</i></a>
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
                                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">assignment_ind</i></a>
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
                                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">assignment_ind</i></a>
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

            <form class="formular">
                <div class="card-panel white">
                    <div class="card-content blue-text">
                        <span class="card-title section-title"><b>Kontakt</b></span>
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

        <div class="section footer">
            <div class="container-fluid">
                <div class="col-xs-12 col-md-6">
                    <p>Copyright &copy; <?php echo date("Y"); ?>  FinanzFreunde38 - All rights reserved.</p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <ul class="pull-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#kontakt"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <div style="clear: both"></div>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Local JavaScript -->

    <!-- External JavaScript -->
    <script type="text/javascript" src="assets/js/Jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/Bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/Materialize/materialize.min.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript" src="resources/js/PageLoader.js"></script>
    <script type="text/javascript" src="resources/js/Smoothscroll.js"></script>

</body>
</html>
