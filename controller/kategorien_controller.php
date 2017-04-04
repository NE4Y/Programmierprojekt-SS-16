<?php

// redirect when user is not logged in
//Controller::needLogin();


$kat = new Category();


// Add category
if(isset($_POST['add'])) {
    $ret = json_decode($kat->addCategory($_POST['cat_name']));

    if (isset($ret->error)) {
        Controller::$smarty->assign("error", $ret->error->message);

        if(isset($ret->error->status)) {
            Controller::setResponse($ret->error->status);
        }
    }
}

// Edit category
if(User::getUser()->getTypeId() >= 3) {

   if(isset($_POST['save']) && isset($_GET['edit'])) {
        $ret = json_decode($kat->renameCat($_GET['edit'], $_POST['cat_name']));

        if (isset($ret->error)) {
            Controller::$smarty->assign("error", $ret->error->message);

            if(isset($ret->error->status)) {
                Controller::setResponse($ret->error->status);
            }
        } else {
            Controller::$smarty->assign("success", "Kategorie erfolgreich umbenannt.");
        }
    }

    Controller::$smarty->assign("showEdit", true);

    if(isset($_GET['edit'])) {
        Controller::$smarty->assign("edit", true);

        $katInfo = json_decode($kat->getCategoryById($_GET['edit']));


        if(isset($katInfo->error)) {
            Notify::addNotify("Diese Kategorie existiert nicht.");
            Controller::$smarty->assign("kat_error", true);

            if(isset($katInfo->error->status)) {
                Controller::setResponse($katInfo->error->status);
            }
        }

        Controller::$smarty->assign("kat_name", (isset($katInfo->name) ? $katInfo->name : ''));
        Controller::$smarty->assign("kat_id", $_GET['edit']);
    }
}

// Delete category
if(User::getUser()->getTypeId() >= 4) {
    if(isset($_GET['delete'])) {
        $ret = json_decode($kat->deleteCategory($_GET['delete']));

        if(isset($ret->error)) {
            Controller::$smarty->assign("error", $ret->error->message);
        }
        else {
            Controller::$smarty->assign("success", "Kategorie erfolgreich gelöscht.");
        }
    }

    Controller::$smarty->assign("admin", true);
}

// Show categories
if(!isset($_GET['offset'])) {
    $_GET['offset'] = 0;
}

// to highlight active page
Controller::$smarty->assign("offset", $_GET['offset']);

// Show specific category
if(isset($_GET['view'])) {
    Controller::$smarty->assign("showCat", true);
    
    $kategorie = json_decode($kat->getCategoryById($_GET['view']));;
    $katname = $kategorie->name;
    Controller::$smarty->assign("katname", $katname);

    $data = json_decode($kat->getVideosByCategory($_GET['view']));

    if(isset($data->error->status)) {
        Controller::setResponse($data->error->status);
    }

    if(isset($data->total)) {
        Controller::$smarty->assign("videosTotal", $data->total);
    }
    else {
        Controller::$smarty->assign("videosTotal", 0);
    }

    Controller::$smarty->assign("videos", (isset($data->items) ? $data->items : null));
}

$data = json_decode($kat->getCategories($_GET['offset'], Config::get("kategoriesPerPage")));

if(!isset($data->total)) {
    Controller::$smarty->assign("anzahlKat", 0);
}
else {
    Controller::$smarty->assign("anzahlKat", $data->total);
}


if(!isset($data->items)) {
    Controller::$smarty->assign("kategories", array());
}
else {
    Controller::$smarty->assign("kategories", $data->items);
}

Controller::$smarty->assign("step", Config::get('kategoriesPerPage'));

?>