<!DOCTYPE html>
<html>
<head>
    <title>Playlist</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/hot_videos.css"/>

    <link rel="stylesheet" type="text/css" href="css/video_of_the_week.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="css/playlist.css"/>

    {include file="header.tpl"}

</head>
<body>
<section id="wrapper">
    {include file="topbar.tpl"}

    {include file="nav.tpl"}

    <!-- Content -->
    {if $typeid != 4}
        <section id="newestplaylist" class="playlist_view">
            <h2><i class="fa fa-fire orange" aria-hidden="true"></i>Neuste Playlist</h2>
            <hr/>
            <h3>{$newplaylist->name}</h3>

            <ul>
                <li>Zuletzt geändert: {$newplaylist->timestamp}</li>
                <li>Ersteller: {$newplaylist->ownername}</li>
                <li>Videoanzahl gesamt: {$newplaylist->videos->total}</li>
            </ul>

            {if $newplaylist->abonniert == True}
                <form action="" method="post">
                    <input type="hidden" name="playlistid" value="{$newplaylist->id}">
                    <button class="playlist_labels abo-btn" type="submit" name="unfollow"><i
                                class="fa fa-thumbs-down"></i></button>
                </form>
            {/if}
            {if $newplaylist->abonniert == False}
                <form action="" method="post">
                    <input type="hidden" name="playlistid" value="{$newplaylist->id}">
                    <button class="playlist_labels abo-btn" type="submit" name="follow"><i class="fa fa-thumbs-up"></i>
                    </button>
                </form>
            {/if}
            <span class="playlist_labels" id="labelPlaylist_{$newplaylist->id}">
        <label><i class="fa fa-users" aria-hidden="true"></i>
            {$newplaylist->followers->total}
        </label>

    </span>
            <ul class="playlist_list">
                {if $newplaylist->videos->total >0}
                    {if $newplaylist != null}
                        {foreach from=$newplaylist->videolist->items item=video}
                            <li>
                                <article>
                <span class="play" aria-hidden="true">
                    <a href="./video?id={$video->id}">
                        <img src="img/play-icon_red.png"/>
                    </a>
                </span>
                                    <img src="{$video->previews->items[2]->uri}" class="img_playlistvideo"/>
                                    <div class="image_text">
                                        <p>{$video->title}</p>

                                        <label><i class="fa fa-eye" aria-hidden="true"></i> {$video->views}</label>
                                    </div>
                                </article>
                            </li>
                        {/foreach}
                    {/if}
                {else}
                    <li>Diese Playlist enthält noch keine Videos.</li>
                {/if}
            </ul>
            <hr/>
            <button class="fa fa-play playlistbutton"
                    onclick="window.location.href='./playlistdetail?id={$newplaylist->id}'">
                <span>Playlist abspielen</span></button>
        </section>
        <section id="topratedplaylist" class="playlist_view">
            <h2><i class="fa fa-fire blue" aria-hidden="true"></i>Top Rated Playlist</h2>
            <hr/>
            <h3>{$popplaylist->name}</h3>
            <ul>
                <li>Zuletzt geändert: {$popplaylist->timestamp}</li>
                <li>Ersteller: {$popplaylist->ownername}</li>
                <li>Videoanzahl gesamt: {$popplaylist->videos->total}</li>
            </ul>
            <form action="" method="post">
                {if $popplaylist->abonniert == True}

                <input type="hidden" name="playlistid" value="{$popplaylist->id}">
                <button class="abo-btn" type="submit" name="unfollow"><i class="fa fa-thumbs-down"></i></button>
            </form>
            {/if}
            {if $popplaylist->abonniert == False}
                <input type="hidden" name="playlistid" value="{$popplaylist->id}">
                <button class=" abo-btn" type="submit" name="follow"><i class="fa fa-thumbs-up"></i></button>
            {/if}
            </form>




    <span class="playlist_labels" id="labelPlaylist_{$popplaylist->id}">
        <label><i class="fa fa-users" aria-hidden="true"></i>
            {$popplaylist->followers->total}
        </label>
    </span>
            <ul class="playlist_list">
                {if $popplaylist->videos->total >0}
                    {foreach from=$popplaylist->videolist->items item=video}
                        <li>
                            <article>
                <span class="play" aria-hidden="true">
                    <a href="./video?id={$video->id}">
                        <img src="img/play-icon_red.png"/>
                    </a>
                </span>
                                <img src="{$video->previews->items[2]->uri}" class="img_playlistvideo"/>
                                <div class="image_text">
                                    <p>{$video->title}</p>

                                    <label><i class="fa fa-eye" aria-hidden="true"></i> {$video->views}</label>
                                </div>
                            </article>
                        </li>
                    {/foreach}
                {else}
                    <li>Diese Playlist enthält noch keine Videos.</li>
                {/if}
            </ul>
            <hr/>
            <button class="fa fa-play playlistbutton"
                    onclick="window.location.href='./playlistdetail?id={$popplaylist->id}'">
                <span>Playlist abspielen</span></button>
        </section>
        {if $typeid > 1}
            <div>
                <button class="fa fa-close" id="plchanges_button_close"></button>
            </div>
            <section id="addPlayForm" class="content">
                <form method="get" action="playlist" id="playform" name="playform">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                        <input required type="text" class="form-control" name="name" placeholder="Name"
                               aria-describedby="sizing-addon2">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                        <input required type="number" min="0" max="1" class="form-control" name="visibility"
                               placeholder="Sichtbarkeit" aria-describedby="sizing-addon2">
                    </div>
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-plus-square white" aria-hidden="true"></i>Hinzufügen
                    </button>
                    <input hidden="true" name="create" value="1">
                </form>
            </section>
            <div id="c-mask-playlist" class="c-mask"></div>
            <!-- /c-mask for Playlist-Changes -->
            <section id="yourplaylists" class="playlist_overview">
                <h2><i class="fa fa-video-camera blue" aria-hidden="true"></i>Deine Playlists</h2>
                <hr/>
                <div id="playlist_buttons">
                    <button class="fa fa-plus-square playlistbutton">
                        <span id="add">Playlist hinzufügen</span>
                    </button>
                </div>
                {if !empty($playlists)}
                    {foreach from=$playlists item=entry}
                        {if $entry->ownerid == $userid}
                            <div class="playlist">
                                <article>
                        <span class="play" aria-hidden="true">
                            <a href="./playlistdetail?id={$entry->id}">
                            <img src="img/play-icon_red.png"/></a>
                        </span>
                                    {if $entry->videos->total neq 0}
                                        <img class="thumbnail_img"
                                             src="{$entry->videolist->items[0]->previews->items[2]->uri}"/>
                                    {else}
                                        <img class="thumbnail_img" src="img/wolf_s.jpg"/>
                                    {/if}
                                    <div class="image_text">
                                        <p>{$entry->name}</p>
                                    </div>
                                </article>
                                <ul class="playlist_titles">
                                    <li><h3><a href="./playlistdetail?id={$entry->id}">
                                                {$entry->name}</a>
                                        </h3></li>
                                    {if $entry->videos->total neq 0}
                                        {foreach from=$entry->videolist->items item=video}
                                            <li>{$video->title}
                                                <span>
                                                <i class="fa fa-eye" aria-hidden="true"></i>{$video->views}
                                            </span>
                                            </li>
                                            <!--<li><a href="playlist?pid={$entry->id}&vid={$video->id}&delete_vid=1"
                                               id="delete_vid"><i class="fa fa-minus-square white"
                                                                  aria-hidden="true"></i>
                                                Video löschen</a></li>-->
                                        {/foreach}

                                    {else}
                                        <li>Keine Videos</li>
                                    {/if}
                                    <li><a href="./search?q=v:&type=Alle&pid={$entry->id}"><i
                                                    class="fa fa-plus-square white" aria-hidden="true"></i>
                                            Video hinzufügen</a></li>
                                    <li><a href="./playlistdetail?id={$entry->id}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i> zur Playlist
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        {/if}
                    {/foreach}
                    <div class="clear"></div>
                {else}
                    Du hast keine Playlists
                {/if}
            <br/><br/>
            <h2><i class="fa fa-video-camera blue" aria-hidden="true"></i>Abbonierte Playlists</h2>
            <hr/>
            {if !empty($abbonplay)}
                {foreach from=$abbonplay item=entry}
                    <div class="playlist">
                        <article>
                        <span class="play" aria-hidden="true">
                            <a href="./playlistdetail?id={$entry->id}">
                            <img src="img/play-icon_red.png"/></a>
                        </span>
                            {if $entry->videos->total neq 0}
                                <img class="thumbnail_img"
                                     src="{$entry->videolist->items[0]->previews->items[2]->uri}"/>
                            {else}
                                <img class="thumbnail_img" src="img/wolf_s.jpg"/>
                            {/if}
                            <div class="image_text">
                                <p>{$entry->name}</p>

                                <form action="" method="post">
                                    <input type="hidden" name="playlistid" value="{$entry->id}">
                                            <button class="abo-btn" type="submit" name="unfollow"><i
                                                        class="fa fa-thumbs-down"></i></button>
                                </form>
                            </div>
                        </article>
                        <ul class="playlist_titles">
                            <li><h3><a href="./playlistdetail?id={$entry->id}">
                                        {$entry->name}</a>
                                </h3></li>
                            {if $entry->videos->total neq 0}
                                {foreach from=$entry->videos->items item=video}
                                    <li>{$video->title}
                                        <span>
                                                <i class="fa fa-eye" aria-hidden="true"></i>{$video->views}
                                            </span>
                                    </li>
                                    <!--<li><a href="playlist?pid={$entry->id}&vid={$video->id}&delete_vid=1"
                                               id="delete_vid"><i class="fa fa-minus-square white"
                                                                  aria-hidden="true"></i>
                                                Video löschen</a></li>-->
                                {/foreach}

                            {else}
                                <li>Keine Videos</li>
                            {/if}
                            <li><a href="./playlistdetail?id={$entry->id}">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i> zur Playlist
                                </a>
                            </li>
                        </ul>
                    </div>
                {/foreach}
                <div class="clear"></div>
            {else}
                Du hast keine Playlists
            {/if}
            </section>
        {/if}
        <section id="allplaylists" class="playlist_overview">
            <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Alle Playlisten</h2>
            <hr/>
            {foreach from=$allplaylists item=entry}
                {if $entry->videos->total neq 0}
                    <div class="playlist {$entry->id}">
                        <article>
                    <span class="play" aria-hidden="true">
                        <a href="./playlistdetail?id={$entry->id}">
                        <img src="img/play-icon_red.png"/></a>
                    </span>
                            <img class="thumbnail_img"
                                 src="{$entry->videolist->items[0]->previews->items[2]->uri}"/>
                            <div class="image_text">
                                <p>{$entry->name}</p>
                                <label><i class="fa fa-users" aria-hidden="true"></i>
                                    {$entry->followers->total}
                                </label>
                                <form action="" method="post">
                                    {if isset($loggedIn) && $loggedIn == True}
                                        {if $entry->abonniert == True}
                                            <input type="hidden" name="playlistid" value="{$entry->id}">
                                            <button class="abo-btn" type="submit" name="unfollow"><i
                                                        class="fa fa-thumbs-down"></i></button>
                                        {/if}
                                        {if $entry->abonniert == False}
                                            <input type="hidden" name="playlistid" value="{$entry->id}">
                                            <button class="abo-btn" type="submit" name="follow"><i
                                                        class="fa fa-thumbs-up"></i></button>
                                        {/if}
                                    {/if}
                                </form>


                                <!-- <label>Action</label>
                                ***Videos haben keine Kategorie, man müsste alle Kat nach dem Video durchsuchen um die passenden hier anzuzeigen*** -->
                            </div>
                        </article>
                        <ul class="playlist_titles">
                            <li><h3>{$entry->name}</h3></li>
                            {foreach from=$entry->videolist->items item=video}
                                <li>{$video->title}
                                    <span><i class="fa fa-eye" aria-hidden="true"></i>{$video->views}</span>
                                </li>
                            {/foreach}
                        </ul>
                    </div>
                {else}
                    <div class="playlist {$entry->id}">
                        <article>
                    <span class="play" aria-hidden="true">
                        <img src="img/play-icon_red.png"/>
                    </span>
                            <img class="thumbnail_img" src="img/wolf_s.jpg"/>
                            <div class="image_text">
                                <p>{$entry->name}</p>
                                <label><i class="fa fa-users" aria-hidden="true"></i>
                                    {$entry->followers->total}
                                </label>
                                <form method="post" action="./playlist">
                                    {if isset($loggedIn) && $loggedIn == True}
                                        {if $entry->abonniert}
                                            <input type="hidden" name="playlistid" value="{$entry->id}">
                                            <button class="abo-btn" type="submit" name="unfollow"><i
                                                        class="fa fa-thumbs-down"></i></button>
                                        {/if}
                                        {if !$entry->abonniert}
                                            <input type="hidden" name="playlistid" value="{$entry->id}">
                                            <button class="abo-btn" type="submit" name="follow"><i
                                                        class="fa fa-thumbs-up"></i></button>
                                        {/if}
                                    {/if}
                                </form>
                                <!-- <label>Action</label>
                                ***Videos haben keine Kategorie, man müsste alle Kat nach dem Video durchsuchen um die passenden hier anzuzeigen*** -->
                            </div>
                        </article>
                        <ul class="playlist_titles">
                            <li><h3>{$entry->name}</h3></li>
                            <li>Keine Videos</li>
                        </ul>
                    </div>
                {/if}
            {/foreach}
            <div class="clear"></div>
        </section>
    {else}
        <section id="adminFunctions">
            {include file="playlist_admin.tpl"}
        </section>
    {/if}
</section>
{include file="footer.tpl"}
</body>
</html>

