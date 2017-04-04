<?php

/**
 * Created by PhpStorm.
 * User: maximilian
 * Date: 28.05.16
 * Time: 14:03
 */
class Register {



    private $username, $realname, $mail, $userpass;

    public function __construct($username,$userpass, $realname, $mail) {
        $this->username = $username;
        $this->userpass = $userpass;
        $this->realname = $realname;
        $this->mail = $mail;
    }


    public  function register() {
        $return = RestAPI::post("/register", array("username" => $this->username,  "password" => $this->userpass, "realname" => $this->realname, "mail" => $this->mail));

        $return = json_decode($return);

        // Check for potential Errors
        if(isset($return->error)) {
            Notify::addNotify($return->error->message);
        }

        else{
            Notify::addNotify("Registrierung erfolgreich");
        }

         

    }



}





