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
            <img src="resources/images/example1.jpg">
        </div>

        <div class="item">
            <img src="resources/images/example2.jpg">
        </div>

        <div class="item">
            <img src="resources/images/example1.jpg">
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
            <div class="col-md-4" style="padding-left: 0;">
                <div class="thumbnail">
                    <a href="?view=angestellter">
                        <img src="assets/images/Angestellter.jpg" alt="Angestellt" data-toggle="collapse" data-target="#varContent" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p><i class="verticalIcons material-icons">chevron_right</i>Angestellt</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4" style="padding-left: 0;">
                <div class="thumbnail">
                    <a href="">
                        <img src="assets/images/Selbstständiger.jpg" alt="Selbständig" data-toggle="collapse" data-target="#varContent" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p><i class="verticalIcons material-icons">chevron_right</i>Selbständig</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4" style="padding-left: 0;">
                <div class="thumbnail">
                    <a href="">
                        <img src="assets/images/Entrepreneur.jpg" alt="Unternehmer" data-toggle="collapse" data-target="#varContent" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p><i class="verticalIcons material-icons">chevron_right</i>Unternehmer</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4" style="padding-left: 0;">
                <div class="thumbnail">
                    <a href="">
                        <img src="assets/images/Beamter.jpg" alt="Student" data-toggle="collapse" data-target="#varContent" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p><i class="verticalIcons material-icons">chevron_right</i>Beamter</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4" style="padding-left: 0;">
                <div class="thumbnail">
                    <a href="">
                        <img src="assets/images/Student.jpg" alt="Auszubildener" data-toggle="collapse" data-target="#varContent" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p><i class="verticalIcons material-icons">chevron_right</i>Student</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4" style="padding-left: 0;">
                <div class="thumbnail">
                    <a href="">
                        <img src="assets/images/Auszubildener.jpg" alt="Auszubildener" data-toggle="collapse" data-target="#varContent" style="width:100%">
                        <div class="caption" style="height: 35px;">
                            <p><i class="verticalIcons material-icons">chevron_right</i>Auszubildener</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>

    <!-- Quote -->
    <?php

        if (isset($this->_['currentQuote']) && isset($this->_['quoteAuthor'])) {

            echo "<div class='row'>
                    <blockquote>
                        <p>" . $this->_['currentQuote'] . "</p>
                        <footer>" .
                $this->_['quoteAuthor'] .
                "</footer>
                    </blockquote>
                </div>";

        }

    ?>


<!--Kontaktformular -->
<div id="kontakt" class="section" style="padding-top: 0; padding-bottom: 0;">

    <div class="strike">
        <span><h2>Kontakt</h2></span>
    </div>

    <form class="formular" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="card-panel white">
            <div class="card-content blue-text">
                <div class="row" style="margin-top: 5px;">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" name="vorname" type="text" class="validate">
                        <label for="icon_prefix">Vorname</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" name="nachname" type="text" class="validate">
                        <label for="icon_prefix">Nachname</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">contact_mail</i>
                        <input id="icon_prefix" name="mail" type="email" class="validate">
                        <label for="icon_prefix">E-Mail</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">contact_phone</i>
                        <input id="icon_prefix"name="phone" type="text" class="validate">
                        <label for="icon_prefix">Telefonnummer</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">cake</i>
                        <input id="icon_prefix" type="text" class="datepicker validate" name="birthdate">
                        <label for="icon_prefix">Geburtsdatum</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="submit" name="contactSubmit" value="Absenden" class="btn">
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

