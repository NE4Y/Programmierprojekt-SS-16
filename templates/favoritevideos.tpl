<!DOCTYPE html>
<html>
<head>
    <title>Favoriten</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/hot_videos.css"/>

    <link rel="stylesheet" type="text/css" href="css/video_of_the_week.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="css/favoritevideos.css"/>

    <link rel="stylesheet" type="text/css" href="css/video-js.css"/>

    {include file="header.tpl"}

</head>
<body>
<section id="wrapper">
    {include file="topbar.tpl"}

    {include file="nav.tpl"}

    <!-- Content -->
    <section id="favorite_videos">
        <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Populäre Videos</h2>
        <div class="videos">
            {foreach from=$popvids->items item=video}
                <article id="video_{$video->id}">
       <span class="play" aria-hidden="true">
           <a href="./video?id={$video->id}">
               <img src="img/play-icon_red.png"/>
           </a>
       </span>
                    {if substr({$video->previews->items[2]->uri}, 0, 4) == "/srv"}
                        <img class="thumbnail_img" src="img/wolf_s.jpg" style="width:360px; height:200px;"/>
                    {else}
                        <img class="thumbnail_img" src="{$video->previews->items[2]->uri}"/>
                    {/if}
                    <div class="image_text">
                        <p>{$video->title}</p>
                    </div>
                </article>
            {/foreach}
        </div>
        <div class="clear"></div>
    </section>
    <section id="mostviewed">
        <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Meist gesehenes Video</h2>
        <hr/>
        <video id="my-video" class="video-js" controls preload="auto"
               poster="{$mvv_thumb}" data-setup="{ }">
            <source src={$mvv_videourl} type="video/mp4">
        </video>
    </section>
    <section id="toprated_videos">
        <h2><i class="fa fa-video-camera blue" aria-hidden="true"></i>Videos mit bestem Rating</h2>
        <div class="videos">
            {foreach from=$topratedvids item=video}
                <article id="video_{$video->id}">
       <span class="play" aria-hidden="true">
           <a href="./video?id={$video->id}">
               <img src="img/play-icon_red.png"/>
           </a>
       </span>
                    {if substr({$video->previews->items[2]->uri}, 0, 4) == "/srv"}
                        <img class="thumbnail_img" src="img/wolf_s.jpg" style="width:360px; height:200px;"/>
                    {else}
                        <img class="thumbnail_img" src="{$video->previews->items[2]->uri}"/>
                    {/if}
                    <div class="image_text">
                        <p>{$video->title}</p>
                        <label><i class="fa fa-star" aria-hidden="true"></i> {round($video->rating,1)}</label>
                    </div>
                </article>
            {/foreach}
        </div>
        <div class="clear"></div>
    </section>
    <section id="all_videos">
        <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Alle Videos</h2>
        <div class="videos">
            {foreach from=$videos item=video}
                <article id="video_{$video->id}">
       <span class="play" aria-hidden="true">
           <a href="./video?id={$video->id}">
               <img src="img/play-icon_red.png"/>
           </a>
       </span>
                    {if substr({$video->previews->items[2]->uri}, 0, 4) == "/srv"}
                        <img class="thumbnail_img" src="img/mp3.png" style="width:360px; height:200px;"/>
                    {else}
                        <img class="thumbnail_img" src="{$video->previews->items[2]->uri}"/>
                    {/if}
                    <div class="image_text">
                        <p>{$video->title}</p>
                        <label><i class="fa fa-eye" aria-hidden="true"></i> {$video->views}</label>
                    </div>
                </article>
            {/foreach}
        </div>
        <div id="video_steps">
            {for $var=1 to {$anzahlVids / $step}}
                <a id="offset_{($var-1) * $step}" href="./favorites?offset={($var-1) * $step}#all_videos">{$var}</a>
            {/for}
        </div>
        <style>
            #offset_{$offset} {
                text-decoration: underline;
            }
        </style>
        <div class="clear"></div>
    </section>

</section>
{include file="footer.tpl"}
<script src="http://vjs.zencdn.net/5.10.2/video.js"></script>
</body>
</html>

