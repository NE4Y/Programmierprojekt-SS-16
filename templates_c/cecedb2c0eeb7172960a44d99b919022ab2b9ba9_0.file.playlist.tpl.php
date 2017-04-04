<?php
/* Smarty version 3.1.29, created on 2016-07-09 16:47:40
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/playlist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57810e8cedeef4_13938759',
  'file_dependency' => 
  array (
    'cecedb2c0eeb7172960a44d99b919022ab2b9ba9' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/playlist.tpl',
      1 => 1468075498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:topbar.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:playlist_admin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57810e8cedeef4_13938759 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Playlist</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/hot_videos.css"/>

    <link rel="stylesheet" type="text/css" href="css/video_of_the_week.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="css/playlist.css"/>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</head>
<body>
<section id="wrapper">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Content -->
    <?php if ($_smarty_tpl->tpl_vars['typeid']->value != 4) {?>
        <section id="newestplaylist" class="playlist_view">
            <h2><i class="fa fa-fire orange" aria-hidden="true"></i>Neuste Playlist</h2>
            <hr/>
            <h3><?php echo $_smarty_tpl->tpl_vars['newplaylist']->value->name;?>
</h3>

            <ul>
                <li>Zuletzt geändert: <?php echo $_smarty_tpl->tpl_vars['newplaylist']->value->timestamp;?>
</li>
                <li>Ersteller: <?php echo $_smarty_tpl->tpl_vars['newplaylist']->value->ownername;?>
</li>
                <li>Videoanzahl gesamt: <?php echo $_smarty_tpl->tpl_vars['newplaylist']->value->videos->total;?>
</li>
            </ul>

            <?php if ($_smarty_tpl->tpl_vars['newplaylist']->value->abonniert == True) {?>
                <form action="" method="post">
                    <input type="hidden" name="playlistid" value="<?php echo $_smarty_tpl->tpl_vars['newplaylist']->value->id;?>
">
                    <button class="playlist_labels abo-btn" type="submit" name="unfollow"><i
                                class="fa fa-thumbs-down"></i></button>
                </form>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['newplaylist']->value->abonniert == False) {?>
                <form action="" method="post">
                    <input type="hidden" name="playlistid" value="<?php echo $_smarty_tpl->tpl_vars['newplaylist']->value->id;?>
">
                    <button class="playlist_labels abo-btn" type="submit" name="follow"><i class="fa fa-thumbs-up"></i>
                    </button>
                </form>
            <?php }?>
    <span class="playlist_labels" id="labelPlaylist_<?php echo $_smarty_tpl->tpl_vars['newplaylist']->value->id;?>
">
        <label><i class="fa fa-users" aria-hidden="true"></i>
            <?php echo $_smarty_tpl->tpl_vars['newplaylist']->value->followers->total;?>

        </label>

    </span>
            <ul class="playlist_list">
                <?php if ($_smarty_tpl->tpl_vars['newplaylist']->value->videos->total > 0) {?>
                    <?php if ($_smarty_tpl->tpl_vars['newplaylist']->value != null) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['newplaylist']->value->videolist->items;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_video_0_saved_item = isset($_smarty_tpl->tpl_vars['video']) ? $_smarty_tpl->tpl_vars['video'] : false;
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['video']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
$__foreach_video_0_saved_local_item = $_smarty_tpl->tpl_vars['video'];
?>

                        <li>
                            <article>
                <span class="play" aria-hidden="true">
                    <a href="./video?id=<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
">
                        <img src="img/play-icon_red.png"/>
                    </a>
                </span>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['video']->value->previews->items[2]->uri;?>
" class="img_playlistvideo"/>
                                <div class="image_text">
                                    <p><?php echo $_smarty_tpl->tpl_vars['video']->value->title;?>
</p>

                                    <label><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['video']->value->views;?>
</label>
                                </div>
                            </article>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_0_saved_local_item;
}
if ($__foreach_video_0_saved_item) {
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_0_saved_item;
}
?>
                    <?php }?>
                <?php } else { ?>
                    <li>Diese Playlist enthält noch keine Videos.</li>
                <?php }?>
            </ul>
            <hr/>
            <button class="fa fa-play playlistbutton" onclick="window.location.href='./playlistdetail?id=<?php echo $_smarty_tpl->tpl_vars['newplaylist']->value->id;?>
'"><span>Playlist abspielen</span></button>
        </section>
        <section id="topratedplaylist" class="playlist_view">
            <h2><i class="fa fa-fire blue" aria-hidden="true"></i>Top Rated Playlist</h2>
            <hr/>
            <h3><?php echo $_smarty_tpl->tpl_vars['popplaylist']->value->name;?>
</h3>
            <ul>
                <li>Zuletzt geändert: <?php echo $_smarty_tpl->tpl_vars['popplaylist']->value->timestamp;?>
</li>
                <li>Ersteller: <?php echo $_smarty_tpl->tpl_vars['popplaylist']->value->ownername;?>
</li>
                <li>Videoanzahl gesamt: <?php echo $_smarty_tpl->tpl_vars['popplaylist']->value->videos->total;?>
</li>
            </ul>
            <form action="" method="post">
                <?php if ($_smarty_tpl->tpl_vars['popplaylist']->value->abonniert == True) {?>

                <input type="hidden" name="playlistid" value="<?php echo $_smarty_tpl->tpl_vars['popplaylist']->value->id;?>
">
                <button class="abo-btn" type="submit" name="unfollow"><i class="fa fa-thumbs-down"></i></button>
            </form>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['popplaylist']->value->abonniert == False) {?>
                <input type="hidden" name="playlistid" value="<?php echo $_smarty_tpl->tpl_vars['popplaylist']->value->id;?>
">
                <button class=" abo-btn" type="submit" name="follow"><i class="fa fa-thumbs-up"></i></button>
            <?php }?>
            </form>




    <span class="playlist_labels" id="labelPlaylist_<?php echo $_smarty_tpl->tpl_vars['popplaylist']->value->id;?>
">
        <label><i class="fa fa-users" aria-hidden="true"></i>
            <?php echo $_smarty_tpl->tpl_vars['popplaylist']->value->followers->total;?>

        </label>
    </span>
            <ul class="playlist_list">
                <?php if ($_smarty_tpl->tpl_vars['popplaylist']->value->videos->total > 0) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['popplaylist']->value->videolist->items;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_video_1_saved_item = isset($_smarty_tpl->tpl_vars['video']) ? $_smarty_tpl->tpl_vars['video'] : false;
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['video']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
$__foreach_video_1_saved_local_item = $_smarty_tpl->tpl_vars['video'];
?>
                        <li>
                            <article>
                <span class="play" aria-hidden="true">
                    <a href="./video?id=<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
">
                        <img src="img/play-icon_red.png"/>
                    </a>
                </span>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['video']->value->previews->items[2]->uri;?>
" class="img_playlistvideo"/>
                                <div class="image_text">
                                    <p><?php echo $_smarty_tpl->tpl_vars['video']->value->title;?>
</p>

                                    <label><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['video']->value->views;?>
</label>
                                </div>
                            </article>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_1_saved_local_item;
}
if ($__foreach_video_1_saved_item) {
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_1_saved_item;
}
?>
                <?php } else { ?>
                    <li>Diese Playlist enthält noch keine Videos.</li>
                <?php }?>
            </ul>
            <hr/>
            <button class="fa fa-play playlistbutton" onclick="window.location.href='./playlistdetail?id=<?php echo $_smarty_tpl->tpl_vars['popplaylist']->value->id;?>
'"><span>Playlist abspielen</span></button>
        </section>
        <?php if ($_smarty_tpl->tpl_vars['typeid']->value > 1) {?>
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
            <section id="changePlayForm" class="content">
                <form method="get" action="playlist" id="playcform" name="playform">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                        <input required type="text" class="form-control" name="name" placeholder="Neuer Name"
                               aria-describedby="sizing-addon2">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                        <input required type="number" class="form-control" name="id" placeholder="id"
                               aria-describedby="sizing-addon2">
                    </div>
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-exchange white" aria-hidden="true"></i> Änderung speichern
                    </button>
                    <input hidden="true" name="change" value="1">
                </form>
            </section>
            <section id="deletePlayForm" class="content">
                <form method="get" action="playlist" id="playdform" name="playdform">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-minus"></i></span>
                        <input required type="number" class="form-control" name="id" placeholder="id"
                               aria-describedby="sizing-addon2">
                    </div>
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-minus-square white" aria-hidden="true"></i> Löschen
                    </button>
                    <input hidden="true" name="delete" value="1">
                </form>
            </section>
            <div id="c-mask-playlist" class="c-mask"></div>
            <!-- /c-mask for Playlist-Changes -->
            <section id="yourplaylists" class="playlist_overview">
                <h2><i class="fa fa-video-camera blue" aria-hidden="true"></i>Deine Playlists</h2>
                <hr/>
                <div id="playlist_buttons">
                    <button class="fa fa-minus-square playlistbutton">
                        <span id="remove">Playlist löschen</span>
                    </button>
                    <button class="fa fa-plus-square playlistbutton">
                        <span id="add">Playlist hinzufügen</span>
                    </button>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['playlists']->value)) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['playlists']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_2_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_2_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['entry']->value->ownerid == $_smarty_tpl->tpl_vars['userid']->value) {?>
                        <div class="playlist">
                            <article>
                        <span class="play" aria-hidden="true">
                            <a href="./playlistdetail?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                            <img src="img/play-icon_red.png"/></a>
                        </span>
                                <img class="thumbnail_img" src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->videolist->items[0]->previews->items[2]->uri;?>
"/>
                                <div class="image_text">
                                    <p><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</p>
                                </div>
                            </article>
                            <ul class="playlist_titles">
                                <li><h3><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</h3></li>
                                <?php if ($_smarty_tpl->tpl_vars['entry']->value->videos->total != 0) {?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['entry']->value->videolist->items;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_video_3_saved_item = isset($_smarty_tpl->tpl_vars['video']) ? $_smarty_tpl->tpl_vars['video'] : false;
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['video']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
$__foreach_video_3_saved_local_item = $_smarty_tpl->tpl_vars['video'];
?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['video']->value->title;?>

                                            <span>
                                                <i class="fa fa-eye" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['video']->value->views;?>

                                            </span>
                                        </li>
                                        <li><a href="playlist?pid=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
&vid=<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
&delete_vid=1"
                                               id="delete_vid"><i class="fa fa-minus-square white"
                                                                  aria-hidden="true"></i>
                                                Video löschen</a></li>
                                    <?php
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_3_saved_local_item;
}
if ($__foreach_video_3_saved_item) {
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_3_saved_item;
}
?>

                                <?php } else { ?>
                                    <li>Keine Videos</li>
                                    <li><a href="playlist?pid=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
&vid=94&add=1" id="add"><i
                                                    class="fa fa-plus-square white" aria-hidden="true"></i>
                                            Video hinzufügen</a></li>
                                <?php }?>
                                <li><span id="change" class="playlistbuttons">
                                        <i class="fa fa-exchange white" aria-hidden="true"></i>
                                        Playlist ändern
                                    </span>
                                </li>
                                <li>
                                    <a href="./sortPlaylist?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                                        <i class="fa fa-sort-amount-desc white"></i>
                                        Playlist umsortieren
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_2_saved_local_item;
}
if ($__foreach_entry_2_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_2_saved_item;
}
?>
                    <div class="clear"></div>
                <?php } else { ?>
                    Du hast keine Playlists
                <?php }?>
            </section>
        <?php }?>
        <section id="allplaylists" class="playlist_overview">
            <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Alle Playlisten</h2>
            <hr/>
            <?php
$_from = $_smarty_tpl->tpl_vars['allplaylists']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_4_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_4_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                <?php if ($_smarty_tpl->tpl_vars['entry']->value->videos->total != 0) {?>
                    <div class="playlist <?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                        <article>
                    <span class="play" aria-hidden="true">
                        <a href="./playlistdetail?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                        <img src="img/play-icon_red.png"/></a>
                    </span>
                            <img class="thumbnail_img"
                                 src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->videolist->items[0]->previews->items[2]->uri;?>
"/>
                            <div class="image_text">
                                <p><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</p>
                                <label><i class="fa fa-users" aria-hidden="true"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['entry']->value->followers->total;?>

                                </label>
                                <form action="" method="post">
                                    <?php if (isset($_smarty_tpl->tpl_vars['loggedIn']->value) && $_smarty_tpl->tpl_vars['loggedIn']->value == True) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value->abonniert == True) {?>
                                        <input type="hidden" name="playlistid" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                                        <button class="abo-btn" type="submit" name="unfollow"><i
                                                    class="fa fa-thumbs-down"></i></button>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value->abonniert == False) {?>
                                        <input type="hidden" name="playlistid" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                                        <button class="abo-btn" type="submit" name="follow"><i
                                                    class="fa fa-thumbs-up"></i></button>
                                    <?php }?>
                                    <?php }?>
                                </form>


                                <!-- <label>Action</label>
                                ***Videos haben keine Kategorie, man müsste alle Kat nach dem Video durchsuchen um die passenden hier anzuzeigen*** -->
                            </div>
                        </article>
                        <ul class="playlist_titles">
                            <li><h3><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</h3></li>
                            <?php
$_from = $_smarty_tpl->tpl_vars['entry']->value->videolist->items;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_video_5_saved_item = isset($_smarty_tpl->tpl_vars['video']) ? $_smarty_tpl->tpl_vars['video'] : false;
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['video']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
$__foreach_video_5_saved_local_item = $_smarty_tpl->tpl_vars['video'];
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['video']->value->title;?>

                                    <span><i class="fa fa-eye" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['video']->value->views;?>
</span>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_5_saved_local_item;
}
if ($__foreach_video_5_saved_item) {
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_5_saved_item;
}
?>
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="playlist <?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                        <article>
                    <span class="play" aria-hidden="true">
                        <img src="img/play-icon_red.png"/>
                    </span>
                            <img class="thumbnail_img" src="img/wolf_s.jpg"/>
                            <div class="image_text">
                                <p><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</p>
                                <label><i class="fa fa-users" aria-hidden="true"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['entry']->value->followers->total;?>

                                </label>
                                <form method="post" action="./playlist">
                                    <?php if (isset($_smarty_tpl->tpl_vars['loggedIn']->value) && $_smarty_tpl->tpl_vars['loggedIn']->value == True) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value->abonniert) {?>
                                        <input type="hidden" name="playlistid" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                                        <button class="abo-btn" type="submit" name="unfollow"><i
                                                    class="fa fa-thumbs-down"></i></button>
                                    <?php }?>
                                    <?php if (!$_smarty_tpl->tpl_vars['entry']->value->abonniert) {?>
                                        <input type="hidden" name="playlistid" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                                        <button class="abo-btn" type="submit" name="follow"><i
                                                    class="fa fa-thumbs-up"></i></button>
                                    <?php }?>
                                    <?php }?>
                                </form>
                                <!-- <label>Action</label>
                                ***Videos haben keine Kategorie, man müsste alle Kat nach dem Video durchsuchen um die passenden hier anzuzeigen*** -->
                            </div>
                        </article>
                        <ul class="playlist_titles">
                            <li><h3><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</h3></li>
                            <li>Keine Videos</li>
                        </ul>
                    </div>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_4_saved_local_item;
}
if ($__foreach_entry_4_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_4_saved_item;
}
?>
            <div class="clear"></div>
        </section>
    <?php } else { ?>
        <section id="adminFunctions">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:playlist_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </section>
    <?php }?>
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>

<?php }
}
