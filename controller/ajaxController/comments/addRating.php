<?php
/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 04.06.16
 * Time: 14:26
 */


if(isset($_POST['video_id']) && User::getUser()->isLoggedIn() && isset($_POST['rating'])) {
    $ret = Video::addRating($_POST['video_id'], $_POST['rating']);

    if(isset($ret->error)) {
        $video = new Video($_POST['video_id']);

        foreach($video->getRaters() as $vid) {
            if($vid->userid == User::getUser()->getUserId()) {
                $videoid = $vid->id;
            }
        }

        if(!isset($videoid)) {
            echo 'Sie haben dieses Video nicht bewertet';

        }
        else {
            $ret = Video::changeRating($videoid, $_POST['video_id'], $_POST['rating']);

            if(!isset($ret->error)) {
                echo 'Rating gespeichert';
            }
            else {
                echo $ret->error->message;
            }

        }
    }
    else {
        echo 'Rating gespeichert';
    }


}