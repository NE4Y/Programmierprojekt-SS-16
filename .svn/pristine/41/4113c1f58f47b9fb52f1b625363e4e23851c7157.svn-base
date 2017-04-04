<?php

/**
 * Created by PhpStorm.
 * User: Finn
 * Date: 31.05.16
 * Time: 16:16
 */
function custom_sort($a, $b)
{
    return $a[1] < $b[1];
}



class Video {
    /**
     * @return mixed
     */
    public function getVid() {
        return $this->vid;
    }

    public function getViews()
    {
        return $this->views;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getUploaderid() {
        return $this->uploaderid;
    }
    /**
     * @return mixed
     */
    public function getMaxQuality() {
        return $this->maxVideoQuality;
    }

    /**
     * @return mixed
     */
    public function getUploadername() {
        return $this->uploadername;
    }

    /**
     * @return mixed
     */
    public function getUploaddate() {
        return $this->uploaddate;
    }

    /**
     * @return mixed
     */
    public function getRating() {
        return ceil($this->rating);
    }

    /**
     * @return mixed
     */
    public function getUris() {
        return $this->uris;
    }

    /**
     * @return mixed
     */
    public function getPreviews() {
        return $this->previews;
    }

    /**
     * @return mixed
     */
    public function getComments() {
        return $this->comments;
    }

    /**
     * @return mixed
     */
    public function getLink() {
        return $this->link;
    }

    public function getRaters() {
        return $this->raters;
    }

    private $vid;
    private $title;
    private $description;
    private $uploaderid;
    private $uploadername;
    private $uploaddate;
    private $rating;
    private $uris;
    private $previews;
    private $comments;
    private $raters;
    private $maxVideoQuality;
    public $quality;
    public $views;

    public function __construct($id){
            $ret = json_decode(RestAPI::get("/videos/".$id,array("id" => $id)));

            if (isset($ret->error)){
                Controller::redirect("/404");
            }
            else{
                $this->views = $ret->views;
                $this->vid = $ret->id;
                $this->title = (empty($ret->title) ? 'Kein Titel' : $ret->title);
                $this->description = $ret->description;
                $this->uploaderid = $ret->uploaderid;
                $this->uploadername = $ret->uploadername;
                $this->uploaddate = $ret->uploaddate;
                $this->rating = (empty($ret->rating) ? 0 : $ret->rating);
                $this->uris = $ret->uri;
                $this->previews = $ret->previews;
                $this->comments = $ret->comments;
                $this->raters = $ret->ratings->items;
                $this->maxVideoQuality = $ret->maxVideoQuality;
            }

        }

    public static function getVideoById($vid){
        $ret = json_decode(RestAPI::get("/videos/".$vid,array("vid" => $vid)));
        return $ret;
    }

    public static function getVideosByOffset($offset){
        return json_decode(RestAPI::get("/videos?limit=".Config::get('kategoriesPerPage')."&offset=".$offset));
    }

    public static function getVideos(){
        $ret= RestAPI::get("/videos");
        return json_decode($ret);
    }

    public function getVideoByQuality($quality){
        if(isset($this->uris[$quality - 1])){
            $this->quality = $quality;
            return($this->uris[$quality - 1]->uri);
        }
        else{
            $this->quality = 1;
            return($this->uris[0]->uri);
        }
    }
    public function getThumbnailByQuality($quality){
        if(isset($this->previews->items[$quality - 1])){
            return($this->previews->items[$quality - 1]->uri);
        }
        else{
            return($this->previews->items[0]->uri);
        }
    }

    public static function searchVideoByName($name){
        $ret= RestAPI::get("/search?type=video&title=".$name);
        return json_decode($ret);
    }

    public static function getPopularVideos($limit)
    {
        $ret = RestAPI::get("/search?type=popularvideos&limit=" . $limit);
        return json_decode($ret);
    }

    public static function addComment($id, $comment) {

        $ret = RestAPI::post("/videos/".$id."/comments", array("comment" => $comment));

        return json_decode($ret);
    }

    public static function deleteComment($video_id, $id) {
        $ret = RestAPI::emptyDelete("/videos/".$video_id."/comments/".$id);

        return json_decode($ret);
    }

    public static function addRating($video_id, $rating) {
        $ret = RestAPI::post("/videos/".$video_id."/ratings", array("rating" => $rating));

        return json_decode($ret);
    }

    public static function changeRating($rating_id, $video_id, $rating) {
        $ret = RestAPI::put("/videos/".$video_id."/ratings/".$rating_id, array("rating" => $rating));

        return json_decode($ret);
    }

    public static function getNewVideos($limit)
    {
        $ret = RestAPI::get("/search?type=newvideos&limit=" . $limit);
        return json_decode($ret);
    }

    //Because the  return of the backend is currenlty oldest videos first
    public static function getNewVideosALT($limit)
    {
        $ret = RestAPI::get("/videos?limit=1");
        if (isset($ret->error)) {
            Notify::addNotify($ret->error->message);
        } else {
            $total = json_decode($ret)->total;
            $diff = intval($total) - $limit;
            $result = RestAPI::get("/search?type=newvideos&offset=" . strval($diff));
            // In richtige Reihenfolge -> umdrehen
            $resultarray = array();
            $result = json_decode($result);
            foreach ($result->items as $item) {
                array_push($resultarray, $item);
            }
            return array_reverse($resultarray);

        }


    }
    public static function uploadVideo($tmpPath,$name,$mime,$description=''){
        $ret = RestAPI::formUpload($tmpPath,$name,$mime,$description);
        return json_decode($ret);
    }

    public static function getRandomVideo()
    {
        $ret = RestAPI::get("/videos?limit=1");
        if (isset($ret->error)) {
            Notify::addNotify($ret->error->message);
        }

        if (isset($ret) && $ret != FALSE) {
            $number = rand(1, json_decode($ret)->total);
            $get = RestApi::get("/videos?offset=" . $number . "&limit=1");
            return json_decode($get);
        }


    }

    public static function getVideoByUserID($id) {
        $ret = json_decode(RestAPI::get("/users/".$id."/videos"));

        return $ret;
    }

    public static function deleteVideo($id) {
        $ret = json_decode(RestAPI::emptyDelete("/videos/".$id));

        return $ret;
    }

    public static function getTopRatedVideos($stars)
    {
        $ret = json_decode(RestAPI::get("/videos"));
        $max = $stars;
        $helparray = array();
        $trvids = array();
        foreach ($ret->items as $video) {
            $id = $video->id;
            $videoX = Video::getVideoById($id);
            $rating = $videoX->rating;
            if ($rating > $max) {
                array_push($trvids, array($id, $rating));
            }

        }
        usort($trvids, "custom_sort");
        $result = array();
        foreach ($trvids as $item) {
            array_push($result, $item[0]);
        }
        return $result;





    }


    public static function  getMostViewedVideo(){
        $ret = json_decode(RestAPI::get("/videos"));
        $max = 0;
        $vid = null;
        foreach ($ret->items as $video) {
            $views = $video->views;
            if ($views > $max) {
                $vid = $video->id;
                $max = $views;
            }
        }
        return $vid;
    }
}