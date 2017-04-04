<?php
/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 01.06.16
 * Time: 16:18
 */

if(isset($_POST['video_id']) && User::getUser()->isLoggedIn()) {
   $ret = Video::addComment($_POST['video_id'], $_POST['comment']);

    if(isset($ret->id)) {
       echo json_encode($ret);
    }
    else {
        echo 0;
    }
}

?>