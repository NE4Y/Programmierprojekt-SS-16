<?php
//Login::register();

// login request
if(isset($_POST['login'])) {
    $login = new Login($_POST['username'], $_POST['password']);

    if(!$login->login()) {
        Notify::addNotify("Login nicht erfolgreich");
    }
    else {
        Controller::redirect("/");
    }
}


// logout request
if(isset($_GET['action']) && $_GET['action'] == "logout") {
    User::getUser()->logout();
    Controller::redirect("/");
}

if(User::getUser()->isLoggedIn()) {
    Controller::$smarty->assign("loggedIn", true);
    Controller::$smarty->assign("username", User::getUser()->getUsername());
    Controller::$smarty->assign("userid", User::getUser()->getUserId());
}

Controller::$smarty->assign("rights", User::getUser()->getTypeId());


?>