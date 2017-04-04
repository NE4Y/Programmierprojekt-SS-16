<?php


class Login {
    private $username, $userpass;

    public function __construct($username, $userpass) {
        $this->username = $username;
        $this->userpass = $userpass;
    }


    // set up login request
    public function login() {
        $return = RestAPI::post("/login", array("username" => $this->username, "password" => $this->userpass));
        $return = json_decode($return);

        if(isset($return->apikey)) {
            $_SESSION['auth'] = $return->apikey;
            User::getUser()->setAuthKey($return->apikey);

            // get additional user info
            User::getUser()->setUserInfo();

            return true;
        }
        else {
            return false;
        }
    }


}
