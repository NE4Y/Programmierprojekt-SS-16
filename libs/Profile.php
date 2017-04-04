<?php

/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 29.06.16
 * Time: 13:59
 */
class Profile {
    private $ret;


    public function __construct($userid = -1) {
        if($userid == -1) {
            // own profile
            Controller::redirect("/profile");
        }
        else {
            // foreign profile
            $this->ret = User::getUserById($userid);
        }
    }

    public function renderProfile() {
        if(!isset($this->ret->error)) {
            // get user info
            Controller::$smarty->assign("foreignMail", $this->ret->mail);
            Controller::$smarty->assign("foreignId", $this->ret->id);
            Controller::$smarty->assign("foreignRealName", $this->ret->realname);
            Controller::$smarty->assign("foreignName", $this->ret->username);
            Controller::$smarty->assign("foreignProfile", true);
        }
        else {
            // redirect to 404 user doesnt exist
            Controller::$smarty->assign("profile404", true);
            Controller::setResponse(404);
        }
    }

    public function updateProfile($update) {
        return json_decode(RestAPI::patch("/users/" . User::getUser()->getUserId(), $update));
    }


}