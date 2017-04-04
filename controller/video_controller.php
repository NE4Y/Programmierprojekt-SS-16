<?php
/**
 * Created by PhpStorm.
 * User: Finn
 * Date: 31.05.16
 * Time: 16:14
 */


if (isset($_GET['id'])) {
    $video = new Video($_GET['id']);
    if (isset($_POST['quality'])) {
        Controller::$smarty->assign('videourl', $video->getVideoByQuality($_POST['quality']));
        Controller::$smarty->assign('currentQuality', $_POST['quality']);
    } else {
        Controller::$smarty->assign('videourl', $video->getVideoByQuality($video->getMaxQuality()));
        Controller::$smarty->assign('currentQuality', $video->quality);
    }

    Controller::$smarty->assign('title', $video->getTitle());
    Controller::$smarty->assign('comments', $video->getComments()->items);
    Controller::$smarty->assign('maxVideoQuality', $video->getMaxQuality());
    Controller::$smarty->assign('uploadername', $video->getUploadername());
    Controller::$smarty->assign('uploaderid', $video->getUploaderid());
    Controller::$smarty->assign('rating', intval($video->getRating()));
    Controller::$smarty->assign('thumbnail', $video->getThumbnailByQuality(3));
    Controller::$smarty->assign("video_id", $_GET['id']);
    Controller::$smarty->assign("user_id", User::getUser()->getUserId());
    Controller::$smarty->assign("views", $video->getViews());

    $rated = false;
    foreach ($video->getRaters() as $vid) {
        if ($vid->userid == User::getUser()->getUserId()) {
            $rated = true;
            Controller::$smarty->assign("ownRating", $vid->rating);

        }
    }

    if (!$rated) {
        Controller::$smarty->assign("ownRating", 0);

    }


} else {
    Controller::redirect("/404");
}
/**
 * Video zu Playlisten hinzufügen & entfernen
 *
 */
if (User::getUser()->getTypeId() > 1) {
    Controller::$smarty->assign("displayplayverwaltung", TRUE);

// Add Video to Playlist
    if (isset($_POST['plset'])) {
        if (User::getUser()->getTypeId() === "4") {
            $ret = json_decode(Playlist::addVideoToPlaylist($_POST["pid"], $_POST["vid"]));
            if (!isset($ret->{'error'})) {
                Notify::addNotify("Video wurde zu Playlist hinzugefügt.");
            } else {
                Notify::addNotify($ret->error->message);
            }
        } else if (User::getUser()->getUserId() !== json_decode(Playlist::getPlaylistById($_POST['pid']))->ownerid) {
            Notify::addNotify("Du kannst nur deine eigene Playlist bearbeiten");
        } else {
            $ret = json_decode(Playlist::addVideoToPlaylist($_POST["pid"], $_POST["vid"]));
            if (!isset($ret->{'error'})) {
                Notify::addNotify("Video wurde zu Playlist hinzugefügt.");
            } else {
                Notify::addNotify($ret->error->message);
            }
        }
    };


// Delete Video from Playlist
    if (isset($_POST['deletefrompl'])) {
        if (User::getUser()->getTypeId() === "4") {
            $ret = json_decode(Playlist::deleteVideoFromPlaylist($_POST["pid"], $_POST["vid"]));
            if (!isset($ret->error)) {
                Notify::addNotify("Video wurde aus der Playlist gelöscht.");
            } else {
                Notify::addNotify($ret->error->message);
            }
        } else if (User::getUser()->getUserId() !== (json_decode(Playlist::getPlaylistById($_POST['pid']))->ownerid)) {
            Notify::addNotify("Du kannst nur deine eigene Playlist bearbeiten");
        } else {
            $ret = json_decode(Playlist::deleteVideoFromPlaylist($_POST["pid"], $_POST["vid"]));
            if (!isset($ret->error)) {
                Notify::addNotify("Video wurde aus der Playlist gelöscht.");
            } else {
                Notify::addNotify($ret->error->message);
            }
        };
    }
}


/**
 * Video zu Kategorien hinzufügen & entfernen
 *
 */

if ((User::getUser()->getUserId() === Video::getVideoByID($_GET['id'])->uploaderid) || (User::getUser()->getTypeId() === "4")) {
    Controller::$smarty->assign("displaycatverwaltung", TRUE);

    $categories = Category::getAllCategories();
    Controller::$smarty->assign("categories", $categories->items);

// Add Video to Category
    if (isset($_POST['catset'])) {
        if (User::getUser()->getTypeId() === "4") {
            $ret = Category::addVideoToCategory($_POST["vid"], $_POST["cid"]);
            if (!isset($ret->{'error'})) {
                Notify::addNotify("Video wurde zu Kategorie hinzugefügt.");
            } else {
                Notify::addNotify($ret->error->message);
            }
        } else if (User::getUser()->getUserId() === Video::getVideoByID($_POST['vid'])->uploaderid) {
            $ret = Category::addVideoToCategory($_POST["vid"], $_POST["cid"]);
            if (!isset($ret->{'error'})) {
                Notify::addNotify("Video wurde zu Kategorie hinzugefügt.");
            } else {
                Notify::addNotify($ret->error->message);
            }
        } else {
            Notify::addNotify("Du hast nicht die benötigten Rechte");
        };
    }


// Delete Video from Category
    if (isset($_POST['deletefromcat'])) {
        if ((User::getUser()->getUserId() === Video::getVideoById($_POST['vid'])->uploaderid)) {
            $ret = Category::deleteVideoFromCategory($_POST["vid"], $_POST["cid"]);
            if (!isset($ret->error)) {
                Notify::addNotify("Video wurde aus der Kategorie gelöscht.");
            } else {
                Notify::addNotify($ret->error->message);
            }
        } else {
            Notify::addNotify("Nichtmal ein Admin ist allmächtig!");
        };
    }
}

// Show Playlists
if (!isset($_GET['offset'])) {
    $_GET['offset'] = 0;
}
$play = new Playlist();
$data = json_decode($play->getPlaylist($_GET['offset']));
if (!isset($data->{'items'})) {
    Controller::$smarty->assign("playlists", array());
} else {
    Controller::$smarty->assign("playlists", $data->{'items'});
}
Controller::$smarty->assign("step", Config::get('kategoriesPerPage'));



