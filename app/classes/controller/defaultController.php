<?php

session_start();
// Template setzen, Nutzerdaten erhalten
$view->setTemplate('default');
$view->assign('site_title', 'FinanzFreunde38');

if (isset($_POST['contactSubmit'])) {

    $newContact = new Users();
    $newContact->vorname = $_POST['vorname'];
    $newContact->nachname = $_POST['nachname'];
    $newContact->username = $newContact->vorname . $newContact->nachname;
    $newContact->phone = $_POST['phone'];
    $newContact->mail = $_POST['mail'];

    $result = DAOFactory::getUsersDAO()->insertUser($newContact);

    if ($result) {
        echo '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Indicates a successful or positive action.</div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong> Indicates a dangerous or potentially negative action.</div>';
    }


}