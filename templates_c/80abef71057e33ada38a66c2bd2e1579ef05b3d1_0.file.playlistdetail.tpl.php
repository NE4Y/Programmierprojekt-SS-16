<?php
/* Smarty version 3.1.29, created on 2016-07-06 17:50:20
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/playlistdetail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d28bcbf5c31_31943487',
  'file_dependency' => 
  array (
    '80abef71057e33ada38a66c2bd2e1579ef05b3d1' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/playlistdetail.tpl',
      1 => 1467817736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:topbar.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_577d28bcbf5c31_31943487 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['playlist']->value->name;?>
</title>
    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/video.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="css/playlistdetail.css"/>

    <link rel="stylesheet" type="text/css" href="css/video-js.css" rel="stylesheet">

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"><?php echo '</script'; ?>
>



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
            <input hidden="true" type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['playlist']->value->id;?>
">
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
            <input hidden="true" name="id" placeholder="<?php echo $_smarty_tpl->tpl_vars['playlist']->value->id;?>
">
        </form>
    </section>
    <div id="c-mask-playlist" class="c-mask"></div><!-- /c-mask for Playlist-Changes -->
    <div id="content-wrapper">
        <h1><?php echo $_smarty_tpl->tpl_vars['playlist']->value->name;?>
</h1>
        <button id="change" class="playlistbuttons fa fa-exchange white">
            <span>Playlist ändern</span>
        </button>
    <button id="remove" class="playlistbuttons fa fa-trash-o white">
        <span>Playlist löschen</span>
    </button>
    <section id="video_screen" class="content content-colored">
        <div class="fluid-container">
            <aside class="row">
                <div class="col-xs-12 video_view">
                    <h2 id="video_title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
                    <video id="video-playlist" class="video-js vjs-default-skin" controls preload="metadata"
                           poster="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
">
                            <source src=<?php echo $_smarty_tpl->tpl_vars['videourl']->value;?>
 type="video/mp4">
                    </video>
                </div>
                <div id="quality">
                    <?php
$_smarty_tpl->tpl_vars['qua'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['qua']->step = 1;$_smarty_tpl->tpl_vars['qua']->total = (int) ceil(($_smarty_tpl->tpl_vars['qua']->step > 0 ? $_smarty_tpl->tpl_vars['maxVideoQuality']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxVideoQuality']->value)+1)/abs($_smarty_tpl->tpl_vars['qua']->step));
if ($_smarty_tpl->tpl_vars['qua']->total > 0) {
for ($_smarty_tpl->tpl_vars['qua']->value = 1, $_smarty_tpl->tpl_vars['qua']->iteration = 1;$_smarty_tpl->tpl_vars['qua']->iteration <= $_smarty_tpl->tpl_vars['qua']->total;$_smarty_tpl->tpl_vars['qua']->value += $_smarty_tpl->tpl_vars['qua']->step, $_smarty_tpl->tpl_vars['qua']->iteration++) {
$_smarty_tpl->tpl_vars['qua']->first = $_smarty_tpl->tpl_vars['qua']->iteration == 1;$_smarty_tpl->tpl_vars['qua']->last = $_smarty_tpl->tpl_vars['qua']->iteration == $_smarty_tpl->tpl_vars['qua']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['qua']->value == $_smarty_tpl->tpl_vars['currentQuality']->value) {?>
                            <button class="playlistbutton disabled btn">
                                <span>Qualität: <?php echo $_smarty_tpl->tpl_vars['qua']->value;?>
</span>
                            </button>
                        <?php } else { ?>
                            <form method="post" target="_self">
                                <button name="quality" value="<?php echo $_smarty_tpl->tpl_vars['qua']->value;?>
" class="playlistbutton">
                                    <span>Qualität: <?php echo $_smarty_tpl->tpl_vars['qua']->value;?>
</span>
                                </button>
                            </form>
                        <?php }?>
                    <?php }
}
?>

                </div>
            </aside>
    </section>
    <section id="pl_videolist">
        <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Videos der Playlist</h2>
        <div id="video-playlist-vjs-playlist" class='vjs-playlist'>
            <ul id="list_videolist">
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['totalvid']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['totalvid']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                    <li>
                        <article class="small_video pl_video_<?php echo $_smarty_tpl->tpl_vars['videolist']->value->items[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
                        <span class="play" aria-hidden="true">
                            <a id="<?php echo $_smarty_tpl->tpl_vars['videolist']->value->items[$_smarty_tpl->tpl_vars['i']->value]->id;?>
" class="vjs-track" href="#episode-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                               data-index="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['vidmaxq']->value[$_smarty_tpl->tpl_vars['i']->value];?>
">
                                <img src="img/play-icon_red.png"/>
                            </a>
                        </span>
                            <img class="thumbnail_img" src="<?php echo $_smarty_tpl->tpl_vars['videolist']->value->items[$_smarty_tpl->tpl_vars['i']->value]->previews->items[2]->uri;?>
"/>
                            <div class="image_text">
                                <span><?php echo $_smarty_tpl->tpl_vars['videolist']->value->items[$_smarty_tpl->tpl_vars['i']->value]->title;?>
</span>
                                <p class="description"><?php echo $_smarty_tpl->tpl_vars['videolist']->value->items[$_smarty_tpl->tpl_vars['i']->value]->description;?>
</p>
                            </div>
                            <button id="delete-from-myPl" class="fa fa-trash-o white"
                                    onclick="window.location.href='playlistdetail?id=<?php echo $_smarty_tpl->tpl_vars['playlist']->value->id;?>
&pid=<?php echo $_smarty_tpl->tpl_vars['playlist']->value->id;?>
&vid=<?php echo $_smarty_tpl->tpl_vars['videolist']->value->items[$_smarty_tpl->tpl_vars['i']->value]->id;?>
&delete_vid=1'">
                            </button>
                        </article>
                    </li>
                <?php }
}
?>

            </ul>
        </div>
    </section>
    <section id="video-info">
        <div class="row">
            <div class="" id="title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
        </div>
        <div id="user"><span><img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['uploaderid']->value;?>
"/></span><a
                    href="./profile?id=<?php echo $_smarty_tpl->tpl_vars['uploaderid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['uploadername']->value;?>
</a></div>
        <div id="action-buttons">Share!
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
            <i class="fa fa-reddit-alien" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </div>
    </section>
    <section id="rating">
        Rate:
        <div class="rating-wrapper">
            <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 5) {?>checked<?php }?> id="rating-input-1-5"
                   name="rating-input-5"/>
            <label for="rating-input-1-5" class="rating-star"></label>
            <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 4) {?>checked<?php }?> id="rating-input-1-4"
                   name="rating-input-4"/>
            <label for="rating-input-1-4" class="rating-star"></label>
            <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 3) {?>checked<?php }?> id="rating-input-1-3"
                   name="rating-input-3"/>
            <label for="rating-input-1-3" class="rating-star"></label>
            <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 2) {?>checked<?php }?> id="rating-input-1-2"
                   name="rating-input-2"/>
            <label for="rating-input-1-2" class="rating-star"></label>
            <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 1) {?>checked<?php }?> id="rating-input-1-1"
                   name="rating-input-1"/>
            <label for="rating-input-1-1" class="rating-star"></label>
        </div>
    </section>

    <section id="comments">
        <div id="comment_input">
            <input type="hidden" id="video_id" value="<?php echo $_smarty_tpl->tpl_vars['video_id']->value;?>
"/>
            <input type="hidden" id="user_id" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"/>
        </div>
        <hr/>
        <?php if (isset($_smarty_tpl->tpl_vars['loggedIn']->value)) {?>
            <textarea placeholder="Das ist mein Kommentar." class="input-text" name="comment"
                      id="comment_field"></textarea>
            <div class="clear"></div>
            <br/>
            <button type="submit" id="save_comment" class="btn btn-info">Speichern</button>
            <br/>
        <?php }?>
        <br/>
        <section id="comment_sec">
        <?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_c_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
            <article>
                <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['c']->value->userid;?>
" alt="usericon"/>
                <h6><a href="./profile?id=<?php echo $_smarty_tpl->tpl_vars['c']->value->userid;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->username;?>
</a>
                    <span><?php echo $_smarty_tpl->tpl_vars['c']->value->timestamp;?>
</span>
                    <?php if ((isset($_smarty_tpl->tpl_vars['userid']->value) && $_smarty_tpl->tpl_vars['userid']->value == $_smarty_tpl->tpl_vars['c']->value->userid) || (isset($_smarty_tpl->tpl_vars['rights']->value) && $_smarty_tpl->tpl_vars['rights']->value >= 4)) {?>
                        <i class="fa fa-trash deleteComment" data-commentID="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"></i>
                    <?php }?>
                </h6>
                <p><?php echo $_smarty_tpl->tpl_vars['c']->value->comment;?>
</p>
                <div class="clear"></div>
            </article>
        <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_local_item;
}
if ($__foreach_c_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_item;
}
?>
        </section>
    </section>
    </div>

</section>
<div class="clear"></div>
</section>

<?php echo '<script'; ?>
 src="http://vjs.zencdn.net/5.10.2/video.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/videojs.playlist.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>

<?php }
}
