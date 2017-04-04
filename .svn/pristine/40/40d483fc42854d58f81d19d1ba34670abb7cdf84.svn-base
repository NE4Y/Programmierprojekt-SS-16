<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- customn css -->
    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/hot_videos.css"/>

    <link rel="stylesheet" type="text/css" href="css/video_of_the_week.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="css/random_video.css"/>

    <link rel="stylesheet" type="text/css" href="css/video-js.css"/>

    <link href="css/video-js.css" rel="stylesheet">

    {include file="header.tpl"}
</head>
<body>
<section id="wrapper">
{include file="topbar.tpl"}

{include file="nav.tpl"}





<!-- Content -->
<section id="hot_videos">
    {foreach from=$popularVideos item=$popEntry}
        <article>
       <span class="play" aria-hidden="true">
           <a href="./video?id={$popEntry->id}"><img src="img/play-icon_red.png"/></a>
       </span>
            <img class="popthumbnails" src="{$popEntry->previews->items[2]->uri}"/>
            <div class="image_text">
                <p>{$popEntry->title}</p>
                <label><i class="fa fa-eye" aria-hidden="true"></i> {$popEntry->views}</label>
            </div>
        </article>
    {/foreach}
    <div class="clear"></div>
</section>
    {if isset($randomvideothumb)}
    <section id="random_video">
            <h2>
                <button onclick="refresh_video()" name="randomvideo"><i class="fa fa-random orange" aria-hidden="true"></i></button>
                Zufälliges Video
            </h2>
        <hr/>
        <video id="my-randomvideo" class="video-js" controls preload="auto"
               poster="{$randomvideothumb}" data-setup="{ }">
            <source src={$randomvideolink} type="video/mp4">
        </video>

        <table class="table">
            <tr>
                <th >Titel:</th>
                <td id="randomTitle">{$randomTitle}</td>
            </tr>
            <tr>
                <th>Beschreibung:</th>
                <td id="randomDescription">{$randomDescription}</td>
            </tr>
            <tr>
                <th>Views:</th>
                <td id="randomViews">{$randomViews}</td>
            </tr>
            <tr>
                <th>Rating:</th>
                <td id="randomRating">{$randomRating} / 5</td>
            </tr>
        </table>

        <div class="clear"></div>

    </section>
    {/if}

    <section id="video_of_the_week">

        <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Video of the week</h2>

        <hr/>
        <video id="my-video" class="video-js" controls preload="auto"
           poster="{$hottestvideothumb}" data-setup="{ }">
            <source src={$hottestvideolink} type="video/mp4">
        </video>

    </section>

    <section id="cat_cloud">
        <h2><i class="fa fa-cloud orange" aria-hidden="true"></i>Tag Cloud</h2>
            {foreach from=$home item=entry}
                {if $entry->videos->total > 0 && $entry->videos->total <=2}
                <a href="./kategories?view={$entry->id}" class="small_cat">{$entry->name}</a>
                {/if}
                {if $entry->videos->total > 3 && $entry->videos->total <= 5}
                    <a href="./kategories?view={$entry->id}" class="middle_cat">{$entry->name}</a>
                {/if}
                {if $entry->videos->total > 5}
                    <a href="./kategories?view={$entry->id}" class="big_cat">{$entry->name}</a>
                {/if}
            {/foreach}
    </section>

</section>

{include file="footer.tpl"}

<script src="http://vjs.zencdn.net/5.10.2/video.js"></script>


</body>
</html>

