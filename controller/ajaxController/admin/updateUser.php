<?php
/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 11.06.16
 * Time: 19:48
 */


if(Validator::validatePost(array("newType", "id"))) {
    $ret = json_decode(RestAPI::patch("/users/" . $_POST['id'], array(array("op" => "replace", "path" => "/typeid", "value" => $_POST['newType']))));

    if(!isset($ret->error)) {
        echo "1";
    }
    else {
        echo "0";
    }

    // To do feedback for user
}

?>