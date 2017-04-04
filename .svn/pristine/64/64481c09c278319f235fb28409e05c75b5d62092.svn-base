<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 09.06.16
 * Time: 00:58
 */

// redirect when user is not logged in
Controller::needLogin();

if (isset($_GET['id'])) {
    $pid = $_GET['id'];
    $playlist = json_decode(Playlist::getPlaylistById($pid));
    $videolist = json_decode(Playlist::getVideosByPlaylist($pid));
    if($videolist->total != 0){
        $vidmaxq = array();
        $vidid =array();
        $totalvid= $playlist->videos->total;
        for($i=0; $i < $totalvid; $i++){
            $video = $videolist->items[$i];
            $maxq = $video->maxVideoQuality -1;
            array_push($vidid, $video->id);
            array_push($vidmaxq, $video->uri[$maxq]->uri);
        }
        $videoToDisplay = new Video($videolist->items[0]->id);
        Controller::$smarty->assign('videolist', $videolist);
        Controller::$smarty->assign('playlist', $playlist);
        Controller::$smarty->assign('vidmaxq', $vidmaxq);
        Controller::$smarty->assign('vidid', $vidid);
        Controller::$smarty->assign('totalvid', $totalvid);
        Controller::$smarty->assign('hasVideos', true);
        if (isset($_POST['quality'])){
            Controller::$smarty->assign('videourl', $videoToDisplay->getVideoByQuality($_POST['quality']));
            Controller::$smarty->assign('currentQuality', $_POST['quality']);
        }
        else{
            Controller::$smarty->assign('videourl', $videoToDisplay->getVideoByQuality($videoToDisplay->getMaxQuality()));
            Controller::$smarty->assign('currentQuality', $videoToDisplay->quality);
        }
        Controller::$smarty->assign('title', $videoToDisplay->getTitle());
        Controller::$smarty->assign('comments', $videoToDisplay->getComments()->items);
        Controller::$smarty->assign('maxVideoQuality', $videoToDisplay->getMaxQuality());
        Controller::$smarty->assign('uploadername', $videoToDisplay->getUploadername());
        Controller::$smarty->assign('uploaderid', $videoToDisplay->getUploaderid());
        Controller::$smarty->assign('rating', intval($videoToDisplay->getRating()));
        Controller::$smarty->assign('thumbnail', $videoToDisplay->getThumbnailByQuality(3));
        Controller::$smarty->assign("video_id", $_GET['id']);
        Controller::$smarty->assign("user_id", User::getUser()->getUserId());
    }else{
        Controller::$smarty->assign('hasVideos', false);
        Controller::$smarty->assign('title', "Empty Playlist");
    }
}
else {
    Controller::redirect("/404");
}

$typeid= User::getUser()->getTypeId();
Controller::$smarty->assign('typeid',$typeid);


if ($typeid == 2 || $typeid == 3){

    //Change Playlist
    if(isset($_GET['change'])){
        $ret = Playlist::renamePlay($_GET['id'],$_GET['name'],User::getUser()->getUserId());
        if (!isset($ret->{'error'})){
            Notify::addNotify("Playlist wurde geändert");
        }
        else{
            Notify::addNotify($ret->error->message);
        }
        $pid=$_GET["id"];
        Controller::redirect("/playlistdetail?id=$pid");
    }

    //Delete Playlist
    if(isset($_GET['delete'])) {
        $ret = Playlist::deletePlaylist(User::getUser()->getUserId(), $_GET['id']);
        if (!isset($ret->{'error'})) {
            Notify::addNotify("Playlist wurde gelöscht");
        } else {
            Notify::addNotify($ret->error->message);
        }
        $pid=$_GET["id"];
        Controller::redirect("/playlistdetail?id=$pid");

    }

    //Create new Playlist
    if(isset($_GET['create'])){
        $ret = Playlist::createplaylist(User::getUser()->getUserId(),$_GET['name'],$_GET['visibility']);
        if (!isset($ret->{'error'})){
            Notify::addNotify("Playlist wurde erstellt");
        }
        else{
            Notify::addNotify($ret->error->message);
        }
    }
    
    //Show Playlist from User with their Videos
    $data = json_decode(Playlist::getPlaylistsByUser(User::getUser()->getUserId()));
    if(!isset($data->{'items'})) {
        Controller::$smarty->assign("playlists", array());
    }
    else {
        foreach ($data->{'items'} as $playlist){
            if ($playlist->{'videos'}->total > 0){
                $video = json_decode(Playlist::getVideosByPlaylist($playlist->id));
                $playlist->{'videolist'}=$video;
            }
        }
        Controller::$smarty->assign("playlists", $data->{'items'});
    }

    // Add Video to Playlist
    if(isset($_GET['add'])){
        $ret = json_decode(Playlist::addVideoToPlaylist($_GET["pid"], $_GET["vid"]));
        if (!isset($ret->{'error'})){
            Notify::addNotify("Video wurde zu Playlist hinzugefügt.");
        }
        else{
            Notify::addNotify($ret->error->message);
        }
        $pid=$_GET["pid"];
        Controller::redirect("/playlistdetail?id=$pid");
    };

    // Delete Video from Playlist
    if(isset($_GET['delete_vid'])){
        $ret = json_decode(Playlist::deleteVideoFromPlaylist($_GET["pid"], $_GET["vid"]));
        if (!isset($ret->{'error'})){
            Notify::addNotify("Video wurde aus der Playlist gelöscht.");
        }
        else{
            Notify::addNotify($ret->error->message);
        }
        $pid=$_GET["pid"];
        Controller::redirect("/playlistdetail?id=$pid");
    };

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
}