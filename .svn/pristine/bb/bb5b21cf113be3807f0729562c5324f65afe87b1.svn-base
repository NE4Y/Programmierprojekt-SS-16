<?php
/**
 * Created by PhpStorm.
 * User: Finn
 * Date: 26.05.16
 * Time: 15:07
 */

/* Show all Videos */

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

/* Top Rated Videos */
$topratedvids = Video::getTopRatedVideos(3);
$trvideos = array();
for ($i=0; $i<sizeof($topratedvids); $i++){
    $vid = $topratedvids[$i];
    $video = Video::getVideobyId($vid);
    $trvideos[$i] = $video;
}
Controller::$smarty->assign("topratedvids", $trvideos);

/* Most viewed Video */

$mvid = Video::getMostViewedVideo();
$mostviewed = new Video($mvid);

Controller::$smarty->assign('mvv_videourl', $mostviewed->getVideoByQuality($mostviewed->getMaxQuality()));
Controller::$smarty->assign('mvv_thumb', $mostviewed->getThumbnailByQuality(3));

/* Popular Video */

$popvids = Video::getPopularVideos(10);
Controller::$smarty->assign("popvids", $popvids);