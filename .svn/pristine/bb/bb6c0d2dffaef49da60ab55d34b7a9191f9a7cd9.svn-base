<?php
/**
 * Created by PhpStorm.
 * User: Finn
 * Date: 27.06.16
 * Time: 17:22
 */

if(isset($_POST['random'])){
    $randomVidId = Video::getRandomVideo()->items[0]->id;
    $v = new Video($randomVidId);
}else{
    if(isset($_POST['id'])){
        $v = new Video($_POST['id']);
    }else{
        $v = new Video(153);
    }

}
$user = User::getUser();
$userid = $user->getUserId();
$result = new stdClass();
$result->title = $v->getTitle();
$result->maxquality = $v->getMaxQuality();
$result->links = $v->getUris();
$result->comment =$v->getComments();
$result->owner = $v->getUploaderid();
$result->rating =$v->getRating();

$result->user = html_entity_decode(htmlspecialchars("<span><img src='https://robohash.org/".$v->getUploaderid()."'/></span><a
href='./profile?id=".$v->getUploaderid()."'>".$v->getUploadername()."</a>"));

if ($v->getRating() == 5){
    $result->rating = html_entity_decode(
        htmlspecialchars("Rate:
        <div class='rating-wrapper'>
            <input type='radio' class='rating-input' checked id='rating-input-1-5'
                   name='rating-input-5'/>
            <label for='rating-input-1-5' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-4'
                   name='rating-input-4'/>
            <label for='rating-input-1-4' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-3'
                   name='rating-input-3'/>
            <label for='rating-input-1-3' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-2'
                   name='rating-input-2'/>
            <label for='rating-input-1-2' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-1'
                   name='rating-input-1'/>
            <label for='rating-input-1-1' class='rating-star'></label>
        </div>"));
}

if ($v->getRating() == 4){
    $result->rating = html_entity_decode(
        htmlspecialchars("Rate:
        <div class='rating-wrapper'>
            <input type='radio' class='rating-input' id='rating-input-1-5'
                   name='rating-input-5'/>
            <label for='rating-input-1-5' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-4'
                   name='rating-input-4'/>
            <label for='rating-input-1-4' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-3'
                   name='rating-input-3'/>
            <label for='rating-input-1-3' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-2'
                   name='rating-input-2'/>
            <label for='rating-input-1-2' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-1'
                   name='rating-input-1'/>
            <label for='rating-input-1-1' class='rating-star'></label>
        </div>"));
}

if ($v->getRating() == 3){
    $result->rating = html_entity_decode(
        htmlspecialchars("Rate:
        <div class='rating-wrapper'>
            <input type='radio' class='rating-input' id='rating-input-1-5'
                   name='rating-input-5'/>
            <label for='rating-input-1-5' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-4'
                   name='rating-input-4'/>
            <label for='rating-input-1-4' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-3'
                   name='rating-input-3'/>
            <label for='rating-input-1-3' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-2'
                   name='rating-input-2'/>
            <label for='rating-input-1-2' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-1'
                   name='rating-input-1'/>
            <label for='rating-input-1-1' class='rating-star'></label>
        </div>"));
}

if ($v->getRating() == 2){
    $result->rating = html_entity_decode(
        htmlspecialchars("Rate:
        <div class='rating-wrapper'>
            <input type='radio' class='rating-input' id='rating-input-1-5'
                   name='rating-input-5'/>
            <label for='rating-input-1-5' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-4'
                   name='rating-input-4'/>
            <label for='rating-input-1-4' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-3'
                   name='rating-input-3'/>
            <label for='rating-input-1-3' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-2'
                   name='rating-input-2'/>
            <label for='rating-input-1-2' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-1'
                   name='rating-input-1'/>
            <label for='rating-input-1-1' class='rating-star'></label>
        </div>"));
}

if ($v->getRating() == 1){
    $result->rating = html_entity_decode(
        htmlspecialchars("Rate:
        <div class='rating-wrapper'>
            <input type='radio' class='rating-input' id='rating-input-1-5'
                   name='rating-input-5'/>
            <label for='rating-input-1-5' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-4'
                   name='rating-input-4'/>
            <label for='rating-input-1-4' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-3'
                   name='rating-input-3'/>
            <label for='rating-input-1-3' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-2'
                   name='rating-input-2'/>
            <label for='rating-input-1-2' class='rating-star'></label>
            <input type='radio' class='rating-input' checked id='rating-input-1-1'
                   name='rating-input-1'/>
            <label for='rating-input-1-1' class='rating-star'></label>
        </div>"));
}

if ($v->getRating() == 0){
    $result->rating = html_entity_decode(
        htmlspecialchars("Rate:
        <div class='rating-wrapper'>
            <input type='radio' class='rating-input' id='rating-input-1-5'
                   name='rating-input-5'/>
            <label for='rating-input-1-5' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-4'
                   name='rating-input-4'/>
            <label for='rating-input-1-4' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-3'
                   name='rating-input-3'/>
            <label for='rating-input-1-3' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-2'
                   name='rating-input-2'/>
            <label for='rating-input-1-2' class='rating-star'></label>
            <input type='radio' class='rating-input' id='rating-input-1-1'
                   name='rating-input-1'/>
            <label for='rating-input-1-1' class='rating-star'></label>
        </div>"));
}

$result->comments_ges = $v->getComments()->items;
$a = "";

foreach ($result->comments_ges as $comment){
    if ((isset($userid) && $userid == $comment->id) || (isset($rights) && $rights >= 4)){
        $a= $a.html_entity_decode(htmlspecialchars("
            <article>
                <img src='https://robohash.org/" . $comment->id . "' alt='usericon'/>
                <h6><a href='./profile?id=" . $comment->id . "'>" . $comment->username . "</a>
                    <span>" . $comment->timestamp . "</span>
                    <i class='fa fa-trash deleteComment' data-commentID='".$comment->id ."'></i>
                </h6>
                <p>" . $comment->comment . "</p>
                <div class='clear'></div>
            </article>
        "));
    }
    else{
        $a= $a.html_entity_decode(htmlspecialchars("
            <article>
                <img src='https://robohash.org/" . $comment->id . "' alt='usericon'/>
                <h6><a href='./profile?id=" . $comment->id . "'>" . $comment->username . "</a>
                    <span>" . $comment->timestamp . "</span>
                </h6>
                <p>" . $comment->comment . "</p>
                <div class='clear'></div>
            </article>
        "));
    }
}

$result->comments = $a;

$result->commentinput = html_entity_decode(htmlspecialchars("<input type='hidden' id='video_id' value='".$v->getVid()."'/>
            <input type='hidden' id='user_id' value='".$userid."'/>"));


$result->description = substr($v->getDescription(),0,50);
$result->views = $v->getViews();
echo json_encode($result);
