<?php
/**
 * Functions
 */

function Hotness($video)
{
    return ($video->getRating() * round($video->getViews() / 2));
}


/**
 *REST-Calls
 */
$popularvideos = Video::getPopularVideos("4");
$randomvideo = Video::getRandomVideo();



/**
 * Section Hot-Videos
 */

if (isset($popularvideos)) {
    Controller::$smarty->assign("popularVideos", $popularvideos->items);
} else {
    Controller::$smarty->assign("popularVideos", null);
}


/**
 * Section Random-Video
 */

if (isset($randomvideo->items[0]->id)) {
    $randomvid = new Video ($randomvideo->items[0]->id);
    Controller::$smarty->assign('randomvideolink', $randomvid->getVideoByQuality($randomvid->getMaxQuality()));
    Controller::$smarty->assign('randomvideothumb', $randomvid->getThumbnailByQuality(3));
    Controller::$smarty->assign('randomTitle', $randomvid->getTitle());
    Controller::$smarty->assign('randomDescription', substr($randomvid->getDescription(), 0, 50));
    Controller::$smarty->assign('randomViews', $randomvid->getViews());
    Controller::$smarty->assign('randomRating', $randomvid->getRating());

} else if (isset ($randomvideo->error)) {
    Notify::addNotify($randomvideo->error->message);
} else {
    Notify::addNotify('Prüfe deine Verbindung zum Internet!');
}


/**
 * Section Video_of_the_week
 */

$maxhotness = 0;
if (isset($popularvideos)) {
    foreach ($popularvideos->items as $entries) {
        $video = new Video($entries->id);
        $hot = Hotness($video);
        if ($hot > $maxhotness) {
            $maxhotness = $hot;
            $result = $video;
        }
    }
}
if (isset($result)) {
    Controller::$smarty->assign('hottestvideolink', $result->getVideoByQuality($result->getMaxQuality()));
    Controller::$smarty->assign('hottestvideothumb', $result->getThumbnailByQuality(3));
}


/**
 * Section Cat-Cloud
 */

$kat = new Category();
// Show categories
if (!isset($_GET['offset'])) {
    $_GET['offset'] = 0;
}
// Show specific category
$data = json_decode($kat->getCategories($_GET['offset']));
if (!isset($data->{'items'})) {
    Controller::$smarty->assign("home", array());
} else {
    Controller::$smarty->assign("home", $data->{'items'});
}
?>



