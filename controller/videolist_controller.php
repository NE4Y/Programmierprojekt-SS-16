<?php
/**
 * Created by PhpStorm.
 * User: Finn
 * Date: 26.05.16
 * Time: 15:07
 */

/**
 * Newest-Videos
 */

$newestvids = Video::getNewVideosALT(20);
Controller::$smarty->assign("newestvids", $newestvids);


/**
 * Most-Viewed Video
 *
 */

$mvid = Video::getMostViewedVideo();
$mostviewed = new Video($mvid);

Controller::$smarty->assign('mvv_videourl', $mostviewed->getVideoByQuality($mostviewed->getMaxQuality()));
Controller::$smarty->assign('mvv_thumb', $mostviewed->getThumbnailByQuality(3));


/**
 * All Videos
 */

if (!isset($_GET['offset'])) {
    $_GET['offset'] = 0;
}
Controller::$smarty->assign('offset',$_GET['offset']);

$data = Video::getVideosByOffset($_GET['offset']);

if (!isset($data->{'total'})) {
    Controller::$smarty->assign("anzahlVids", 0);
} else {
    Controller::$smarty->assign("anzahlVids", $data->{'total'});
}

if (!isset($data->{'items'})) {
    Controller::$smarty->assign("videos", array());
} else {
    Controller::$smarty->assign("videos", $data->{'items'});
}
Controller::$smarty->assign("step", Config::get('kategoriesPerPage'));

