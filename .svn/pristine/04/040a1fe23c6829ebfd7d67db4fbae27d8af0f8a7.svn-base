<?php
/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 04.06.16
 * Time: 12:48
 */

if(isset($_POST['comment_id']) && User::getUser()->isLoggedIn()) {
    $ret = Video::deleteComment($_POST['video_id'], $_POST['comment_id']);

    var_dump($ret);

    if($ret == null) {
        echo 1;
    }
    else {
        echo 0;
    }
}
?>