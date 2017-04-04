<?php
// when not logged in
Controller::needLogin();

// view foreign profile
if(isset($_GET['id'])) {
    $ret = User::getUserById($_GET['id']);

    // get user data
    $profile = new Profile($_GET['id']);
    $profile->renderProfile();
}
// own profile
else {
    $profile = new Profile(User::getUser()->getUserId());

// edit profile
    if (isset($_GET['action']) && $_GET['action'] == 'edit') {
        Controller::$smarty->assign("edit", true);

        // safe edited data
        if (isset($_POST['save'])) {
            // check if username, realname and email is set
            if (Validator::validatePost(array("realname", "email"))) {
                // update profile with new data
               $ret = $profile->updateProfile(array(array("op" => "replace", "path" => "/mail", "value" => $_POST['email']), array("op" => "replace", "path" => "/realname", "value" => $_POST['realname'])));

                if (!isset($ret->error)) {
                    Notify::addNotify("Daten geändert");

                    // update user info
                    User::getUser()->setUserInfo();
                }
            } else {
                Notify::addNotify("Bitte alle Informationen angeben.");
            }
        }
    }

    // change password
    if(isset($_GET['action']) && $_GET['action'] == "changePassword") {
        Controller::$smarty->assign("changePW", true);

        // check if updatePW and pw is set (and not empty)
        if(Validator::validatePost(array("updatePW", "pw"))) {
            $ret = $profile->updateProfile(array(array("op" => "replace", "path" => "/password", "value" => $_POST['pw'])));

            if(!isset($ret->error)) {
                Notify::addNotify("Passwort aktualisiert.");
            }
            else {
                if(isset($ret->error->status)) {
                    Controller::setResponse($ret->error->status);
                }

                Notify::addNotify($ret->error->message);
            }
        }
    }

    // delete video
    if(isset($_GET['delete'])) {
        $ret = Video::deleteVideo($_GET['delete']);

        if(isset($ret->error)) {
            Notify::addNotify($ret->error->message);

            if(isset($ret->error)) {
                Controller::setResponse($ret->error);
            }
        }
        else {
            Notify::addNotify("Video erfolgreich gelöscht");
        }
    }

    // get user info
    Controller::$smarty->assign("usermail", User::getUser()->getUserMail());
    Controller::$smarty->assign("userid", User::getUser()->getUserId());
    Controller::$smarty->assign("realname", User::getUser()->getRealName());


}

// get videos by user information
$userVideos = (isset($_GET['id'])) ? Video::getVideoByUserID($_GET['id']) : Video::getVideoByUserID(User::getUser()->getUserId());


Controller::$smarty->assign("totalVideo", (isset($userVideos->total) ? $userVideos->total : 0));
Controller::$smarty->assign("videos", (isset($userVideos->items) ? $userVideos->items : null));

// get playlists by user information
//Show Playlist from User with their Videos

$data = json_decode(Playlist::getPlaylistsByUser(User::getUser()->getUserId()));
Controller::$smarty->assign("playlists", (isset($data) ? $data: null));


?>