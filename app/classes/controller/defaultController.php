<?php

session_start();
// Template setzen, Nutzerdaten erhalten
$view->setTemplate('default');
$view->assign('site_title', 'FinanzFreunde38');

$quotes = array
(
    array("Es ist ein Schönheitsfehler des Kapitalismus, daß er zwar allen die gleiche Chance gibt, geschäftstüchtig zu sein, es aber unterlassen hat, dafür zu sorgen, daß alle auch die gleiche Geschäftstüchtigkeit besitzen, um sie wahrzunehmen.","Sigmund Graff, Aphoristiker und Bühnenschriftsteller (1898 - 1979)"),
    array("Wahrer Reichtum besteht nicht im Besitz, sondern im Genießen.","Ralph Waldo Emerson, Philosoph und Schriftsteller (1803 - 1882)"),
    array("Eine Investition in Wissen bringt noch immer die besten Zinsen.","Benjamin Franklin, Drucker, Verleger, Schriftsteller, Naturwissenschaftler, Erfinder und Staatsmann (1706 - 1790)"),
    array("Wenn eine freie Gesellschaft den vielen die arm sind nicht helfen kann, kann sie auch die wenigen nicht retten die reich sind.","Robert F. Kennedy, Politiker (1925 - 1968)"),
    array("Die Bank ist eine Institution, bei der Sie Geld leihen können, vorausgesetzt Sie brauchen keines.","Mark Twain, Schriftsteller (1835 - 1910)")
);

if (isset($_POST['contactSubmit'])) {

    $newContact = new Users();
    $newContact->vorname = $_POST['vorname'];
    $newContact->nachname = $_POST['nachname'];
    $newContact->username = $newContact->vorname . $newContact->nachname;
    $newContact->phone = $_POST['phone'];
    $newContact->mail = $_POST['mail'];
    $newContact->birthdate = $_POST['birthdate'];

    $result = DAOFactory::getUsersDAO()->insertUser($newContact);

    if ($result) {
        echo '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Indicates a successful or positive action.</div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong> Indicates a dangerous or potentially negative action.</div>';
    }

}

$ranNum = rand(0,count($quotes) - 1);
$currentQuote = $quotes[$ranNum][0];
$quoteAuthor =  $quotes[$ranNum][1];

$this->view->assign('currentQuote', $currentQuote);
$this->view->assign('quoteAuthor', $quoteAuthor);