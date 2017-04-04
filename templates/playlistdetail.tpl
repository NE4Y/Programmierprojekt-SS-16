<!DOCTYPE html>
<html>
<head>
    <title>{$title}</title>
    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/video.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="css/playlistdetail.css"/>

    <link rel="stylesheet" type="text/css" href="css/video-js.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>



    {include file="header.tpl"}
</head>
<body>
<section id="wrapper">
    {include file="topbar.tpl"}

    {include file="nav.tpl"}

    {if $hasVideos}
    <!-- Content -->
    <div>
        <button class="fa fa-close" id="plchanges_button_close"></button>
    </div>
    <section id="changePlayForm" class="content">
        <form method="get" action="playlistdetail" id="playcform" name="playform">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                <input required type="text" class="form-control" name="name" placeholder="Neuer Name"
                       aria-describedby="sizing-addon2">
            </div>
            <button type="submit" class="btn btn-info">
                <i class="fa fa-exchange white" aria-hidden="true"></i> Änderung speichern
            </button>
            <input hidden="true" type="number" name="id" value="{$playlist->id}">
            <input hidden="true" name="change" value="1">
        </form>
    </section>
    <section id="deletePlayForm" class="content">
        <form method="get" action="playlist" id="playdform" name="playdform">
            <div class="input-group">
                Sind Sie sicher, dass Sie diese Playlist löschen möchten?
            </div>
            <button type="submit" class="btn btn-info">
                <i class="fa fa-minus-square white" aria-hidden="true"></i> Löschen
            </button>
            <input hidden="true" name="delete" value="1">
            <input hidden="true" name="id" placeholder="{$playlist->id}">
        </form>
    </section>
    <div id="c-mask-playlist" class="c-mask"></div><!-- /c-mask for Playlist-Changes -->
    <div id="content-wrapper">
        <h1>{$playlist->name}</h1>
        <button id="change" class="playlistbuttons fa fa-exchange white">
            <span>Playlist ändern</span>
        </button>
    <button id="remove" class="playlistbuttons fa fa-trash-o white">
        <span>Playlist löschen</span>
    </button>
        {if $playlist->ownerid == $userid}
        <button id="sort" class="playlistbuttons fa fa-sort-amount-desc white"
                onclick="window.location.href='./sortPlaylist?id={$playlist->id}'">
            <span>Playlist umsortieren</span>
        </button>
        {/if}
    <section id="video_screen" class="content content-colored">
        <div class="fluid-container">
            <aside class="row">
                <div class="col-xs-12 video_view">
                    <h2 id="video_title">{$title}</h2>
                    <video id="video-playlist" class="video-js vjs-default-skin" controls preload="metadata"
                           poster="{$thumbnail}">
                            <source src={$videourl} type="video/mp4">
                    </video>
                </div>
                <div id="quality">
                    {for $qua=1 to $maxVideoQuality}
                        {if $qua eq $currentQuality}
                            <button class="playlistbutton disabled btn">
                                <span>Qualität: {$qua}</span>
                            </button>
                        {else}
                            <form method="post" target="_self">
                                <button name="quality" value="{$qua}" class="playlistbutton">
                                    <span>Qualität: {$qua}</span>
                                </button>
                            </form>
                        {/if}
                    {/for}
                </div>
            </aside>
    </section>
    <section id="pl_videolist">
        <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Videos der Playlist</h2>
        <div id="video-playlist-vjs-playlist" class='vjs-playlist'>
            <ul id="list_videolist">
                {for $i=0; $i<$totalvid; $i++}
                    <li>
                        <article class="small_video pl_video_{$videolist->items[$i]->id}">
                        <span class="play" aria-hidden="true">
                            <a id="{$videolist->items[$i]->id}" class="vjs-track" href="#episode-{$i}"
                               data-index="{$i}" data-src="{$vidmaxq[$i]}">
                                <img src="img/play-icon_red.png"/>
                            </a>
                        </span>
                            <img class="thumbnail_img" src="{$videolist->items[$i]->previews->items[2]->uri}"/>
                            <div class="image_text">
                                <span>{$videolist->items[$i]->title}</span>
                                <p class="description">{$videolist->items[$i]->description}</p>
                            </div>
                            <button id="delete-from-myPl" class="fa fa-trash-o white"
                                    onclick="window.location.href='playlistdetail?id={$playlist->id}&pid={$playlist->id}&vid={$videolist->items[$i]->id}&delete_vid=1'">
                            </button>
                        </article>
                    </li>
                {/for}
            </ul>
        </div>
    </section>
    <section id="video-info">
        <div class="row">
            <div class="" id="title">{$title}</div>
        </div>
        <div id="user"><span><img src="https://robohash.org/{$uploaderid}"/></span><a
                    href="./profile?id={$uploaderid}">{$uploadername}</a></div>
        <div id="action-buttons">Share!
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
            <i class="fa fa-reddit-alien" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </div>
    </section>
    <section id="rating">
        Rate:
        <div class="rating-wrapper">
            <input type="radio" class="rating-input" {if $rating == 5}checked{/if} id="rating-input-1-5"
                   name="rating-input-5"/>
            <label for="rating-input-1-5" class="rating-star"></label>
            <input type="radio" class="rating-input" {if $rating == 4}checked{/if} id="rating-input-1-4"
                   name="rating-input-4"/>
            <label for="rating-input-1-4" class="rating-star"></label>
            <input type="radio" class="rating-input" {if $rating == 3}checked{/if} id="rating-input-1-3"
                   name="rating-input-3"/>
            <label for="rating-input-1-3" class="rating-star"></label>
            <input type="radio" class="rating-input" {if $rating == 2}checked{/if} id="rating-input-1-2"
                   name="rating-input-2"/>
            <label for="rating-input-1-2" class="rating-star"></label>
            <input type="radio" class="rating-input" {if $rating == 1}checked{/if} id="rating-input-1-1"
                   name="rating-input-1"/>
            <label for="rating-input-1-1" class="rating-star"></label>
        </div>
    </section>

    <section id="comments">
        <div id="comment_input">
            <input type="hidden" id="video_id" value="{$video_id}"/>
            <input type="hidden" id="user_id" value="{$userid}"/>
        </div>
        <hr/>
        {if isset($loggedIn)}
            <textarea placeholder="Das ist mein Kommentar." class="input-text" name="comment"
                      id="comment_field"></textarea>
            <div class="clear"></div>
            <br/>
            <button type="submit" id="save_comment" class="btn btn-info">Speichern</button>
            <br/>
        {/if}
        <br/>
        <section id="comment_sec">
        {foreach from=$comments item=$c}
            <article>
                <img src="https://robohash.org/{$c->userid}" alt="usericon"/>
                <h6><a href="./profile?id={$c->userid}">{$c->username}</a>
                    <span>{$c->timestamp}</span>
                    {if (isset($userid) && $userid == $c->userid) || (isset($rights) && $rights >= 4)}
                        <i class="fa fa-trash deleteComment" data-commentID="{$c->id}"></i>
                    {/if}
                </h6>
                <p>{$c->comment}</p>
                <div class="clear"></div>
            </article>
        {/foreach}
        </section>
    </section>
    </div>

</section>
<div class="clear"></div>

<script src="http://vjs.zencdn.net/5.10.2/video.js"></script>
<script src="js/videojs.playlist.js"></script>
{else}
<div class="content">Die Playlist hat keine Videos</div>
{/if}
<div class="clear"></div>
{include file="footer.tpl"}

</body>
</html>

