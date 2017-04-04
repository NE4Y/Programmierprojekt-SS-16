<?php

/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 25.05.16
 * Time: 14:00
 */
class User {
    static $user;
    protected $user_id;
    protected $auth_key;
    protected $type_id;
    protected $username;
    protected $mail;
    protected $realname;


    /**
     * Init user object so you dont have to "travel" the object
     */
    public static function initUser() {
        self::$user = new User();

        // check for auth key
        if(isset($_SESSION['auth'])) {
            self::$user->setAuth($_SESSION['auth']);
        }

        // check for existing user session
        if(isset($_SESSION['user_id'])) {
            self::$user->setUserId($_SESSION['user_id']);
        }

        // check for type_id
        if(isset($_SESSION['type_id'])) {
            self::$user->setTypeId($_SESSION['type_id']);
        }
        else {
            self::$user->setTypeId(1);
        }

        // check for username
        if(isset($_SESSION['username'])) {
            self::$user->setUsername($_SESSION['username']);
        }

        if(isset($_SESSION['mail'])) {
            self::$user->setMail($_SESSION['mail']);
        }

        if(isset($_SESSION['realname'])) {
            self::$user->setRealName($_SESSION['realname']);
        }
    }

    /* Getter */
    /**
     * @return [int] type id
     */
    public function getTypeId() {
        return $this->type_id;
    }

    /**
     * @return [string] api key
     */
    public function getAuth() {
        return $this->auth_key;
    }

    /**
     * @return [int] user id
     */
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * @return User user object
     */
    public static function getUser() {
        return self::$user;
    }

    /**
     * @return [string] username
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @return [string] usermail
     */
    public function getUserMail() {
        return $this->mail;
    }

    public function getRealName() {
        return $this->realname;
    }

    /* Setter */

    /**
     * Set auth key by $key
     * @param $key
     */
    public  function setAuth($key) {
        $this->auth_key = $key;
    }

    /**
     * Set user id by $id
     * @param $id
     */
    public function setUserId($id) {
        $this->user_id = $id;
        $_SESSION['user_id'] = $id;
    }

    /**
     * Set usermail by $mail
     * @param $mail
     */
    public function setMail($mail) {
        $this->mail = $mail;
        $_SESSION['mail'] = $mail;
    }

    public function setRealName($name) {
        $_SESSION['realname'] = $name;
        $this->realname = $name;
    }
    /**
     * Set typeid by $id
     * @param $id
     */
    public function setTypeId($id) {
        $this->type_id = $id;
        $_SESSION['type_id'] = $id;
    }

    /**
     * Set username by $name
     * @param $name
     */
    public function setUsername($name) {
        $this->username = $name;
        $_SESSION['username'] = $name;
    }

    /**
     * Set authkey by $auth
     * @param $auth
     */
    public function setAuthKey($auth) {
        $this->auth_key = $auth;
    }

    /**
     * Set addition user info
     */
    public function setUserInfo() {
        $return = RestAPI::get("/me");

        $return = json_decode($return);

        $this->setUsername($return->username);
        $this->setTypeId($return->typeid);
        $this->setUserId($return->id);
        $this->setMail($return->mail);
        $this->setRealName($return->realname);
    }




    /**
     * @return bool login state
     */
    public function isLoggedIn() {
        return (!empty($this->auth_key));
    }


    public function logout() {
        $this->auth_key = "";
        session_unset();
    }

    /**
     * Abboniere und De-Abonniere Playlist
     */
    public function followPlaylist($playlistid){
        $var = RestAPI::putEmpty('/users/' . json_decode(Playlist::getPlaylistById($playlistid))->ownerid . '/playlists/' . $playlistid . '/followers');
        return json_decode($var);
    }

    public function unfollowPlaylist($playlistid){
        $var = RestAPI::deleteEmpty('/users/' . json_decode(Playlist::getPlaylistById($playlistid))->ownerid . '/playlists/' . $playlistid . '/followers');
        return json_decode($var);
    }

    /**
     * @param $offset int
     * @param $limit int
     * @return json
     */
    public static function getAllUsers($offset,$limit){
        return json_decode(RestAPI::get('/users?offset='.$offset.'&limit='.$limit));
    }

    public static function getUserById($id) {
        $return = RestAPI::get("/users/".$id);

        return json_decode($return);
    }

    public static function deleteUser($id){
        return json_decode(RestAPI::emptydelete("/users/".$id));
    }


}
?>