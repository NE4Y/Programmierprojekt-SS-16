<?php
/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 25.06.16
 * Time: 20:35
 */

$ret = Playlist::sortPlaylist($_POST['playList'], $_POST['movedItem'], 1, $_POST['insertBefore']);


if(!isset($ret->error)) {
    echo '1';
}
else {
    echo (isset($ret->error->message) ? $ret->error->message : "Es ist ein Fehler aufgetreten.");
}
?>