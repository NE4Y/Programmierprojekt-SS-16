<?php
/* Smarty version 3.1.29, created on 2016-06-18 16:15:36
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/video.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576557880c8998_36870446',
  'file_dependency' => 
  array (
    '85a5a8c0bd9e300cd8de9a342e8588eb3f2b5a03' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/video.tpl',
      1 => 1466255835,
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
function content_576557880c8998_36870446 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Video</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/video.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link href="css/video-js.css" rel="stylesheet">

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
    <section id="addVideoToPlaylistForm" class="content">
        <form method="get" action="playlist" id="playdform" name="playdform">
            <div class="input-group">
                    <select class="selectpicker selectplaylists" id="options" name="pid">
                        <?php
$_from = $_smarty_tpl->tpl_vars['playlists']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_0_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_0_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_local_item;
}
if ($__foreach_entry_0_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_item;
}
?>
                        </select>
            </div>
            <button type="submit" class="btn btn-info">
                <i class="fa fa-minus-square white" aria-hidden="true"></i> Zu Playlist hinzufügen
            </button>
            <input hidden="true" name="vid" value="<?php echo $_smarty_tpl->tpl_vars['video_id']->value;?>
">
            <input hidden="true" name="add" value="1">
        </form>
    </section>
    <div id="c-mask-playlist" class="c-mask"></div><!-- /c-mask for Playlist-Changes -->

    <section id="video_screen" class="content content-colored">
    <div class="fluid-container">
        <div class="row">
            <div class="col-xs-12">
                <video id="my-video" class="video-js" controls preload="auto"
                       poster="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" data-setup="{}">
                    <source src=<?php echo $_smarty_tpl->tpl_vars['videourl']->value;?>
 type="video/mp4">
                </video>
            </div>

            <!--<div class="col-xs-4" id="sidebar">
                <h5>Ähnliche Videos</h5>
                <article class="small_video">
                    <div class="row">
                        <div class="col-xs-6">
                            <img src="img/thumbnails/4_small.png"/>
                        </div>
                        <div class="col-xs-6">
                            <h6>Die Verurteilten</h6>
                            <span>Lorem ipsum dolor sit...</span>
                        </div>
                    </div>
                </article>

                <article class="small_video">
                    <div class="row">
                        <div class="col-xs-6">
                            <img src="img/thumbnails/4_small.png"/>
                        </div>
                        <div class="col-xs-6">
                            <h6>Die Verurteilten</h6>
                            <span>Lorem ipsum dolor sit...</span>
                        </div>
                    </div>
                </article>

                <article class="small_video">
                    <div class="row">
                        <div class="col-xs-6">
                            <img src="img/thumbnails/4_small.png"/>
                        </div>
                        <div class="col-xs-6">
                            <h6>Die Verurteilten</h6>
                            <span>Lorem ipsum dolor sit...</span>
                        </div>
                    </div>
                </article>


            </div> -->
        </div>
    </div>
</section>
<section id="video-info">
    <div class="row">
        <div class="" id="title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
        <div id="quality" >
            <?php
$_smarty_tpl->tpl_vars['qua'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['qua']->step = 1;$_smarty_tpl->tpl_vars['qua']->total = (int) ceil(($_smarty_tpl->tpl_vars['qua']->step > 0 ? $_smarty_tpl->tpl_vars['maxVideoQuality']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxVideoQuality']->value)+1)/abs($_smarty_tpl->tpl_vars['qua']->step));
if ($_smarty_tpl->tpl_vars['qua']->total > 0) {
for ($_smarty_tpl->tpl_vars['qua']->value = 1, $_smarty_tpl->tpl_vars['qua']->iteration = 1;$_smarty_tpl->tpl_vars['qua']->iteration <= $_smarty_tpl->tpl_vars['qua']->total;$_smarty_tpl->tpl_vars['qua']->value += $_smarty_tpl->tpl_vars['qua']->step, $_smarty_tpl->tpl_vars['qua']->iteration++) {
$_smarty_tpl->tpl_vars['qua']->first = $_smarty_tpl->tpl_vars['qua']->iteration == 1;$_smarty_tpl->tpl_vars['qua']->last = $_smarty_tpl->tpl_vars['qua']->iteration == $_smarty_tpl->tpl_vars['qua']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['qua']->value == $_smarty_tpl->tpl_vars['currentQuality']->value) {?>
                    <button class="playlistbutton disabled btn">
                    <span >Qualität: <?php echo $_smarty_tpl->tpl_vars['qua']->value;?>
</span>
                    </button>
                <?php } else { ?>
                    <form method="post" target="_self">
                        <button name="quality" value="<?php echo $_smarty_tpl->tpl_vars['qua']->value;?>
" class="playlistbutton">
                            <span >Qualität: <?php echo $_smarty_tpl->tpl_vars['qua']->value;?>
</span>
                        </button>
                    </form>
                <?php }?>
            <?php }
}
?>

        </div>
    </div>
    <div id="user"><span><img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['uploaderid']->value;?>
" /></span><a href="./profile?id=<?php echo $_smarty_tpl->tpl_vars['uploaderid']->value;?>
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
        <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 5) {?>checked<?php }?> id="rating-input-1-5" name="rating-input-5"/>
        <label for="rating-input-1-5" class="rating-star"></label>
        <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 4) {?>checked<?php }?> id="rating-input-1-4" name="rating-input-4"/>
        <label for="rating-input-1-4" class="rating-star"></label>
        <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 3) {?>checked<?php }?> id="rating-input-1-3" name="rating-input-3"/>
        <label for="rating-input-1-3" class="rating-star"></label>
        <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 2) {?>checked<?php }?> id="rating-input-1-2" name="rating-input-2"/>
        <label for="rating-input-1-2" class="rating-star"></label>
        <input type="radio" class="rating-input" <?php if ($_smarty_tpl->tpl_vars['rating']->value == 1) {?>checked<?php }?> id="rating-input-1-1" name="rating-input-1"/>
        <label for="rating-input-1-1" class="rating-star"></label>
    </div>

    <br />

    Views: <?php echo $_smarty_tpl->tpl_vars['views']->value;?>

</section>
    <section id="pl_add">
        <button class="fa fa-plus-square playlistbutton">
            <span id="add">Playlist hinzufügen</span>
        </button>
    </section>

<section id="comments">
    <input type="hidden" id="video_id" value="<?php echo $_smarty_tpl->tpl_vars['video_id']->value;?>
" />
    <input type="hidden" id="user_id" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
    <hr />
    <?php if (isset($_smarty_tpl->tpl_vars['loggedIn']->value)) {?>
        <textarea placeholder="Das ist mein Kommentar." class="input-text" name="comment" id="comment_field"></textarea>
        <div class="clear"></div>
        <br />
        <button type="submit" id="save_comment" class="btn btn-info">Speichern</button>
     <br />
    <?php }?>
    <br />
    <section id="comment_sec"></section>
        <?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_1_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_c_1_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
            <article>
                <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['c']->value->userid;?>
" alt="usericon" />
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
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_1_saved_local_item;
}
if ($__foreach_c_1_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_1_saved_item;
}
?>
    </section>

</section>
    <div class="clear"></div>
</section>
<?php echo '<script'; ?>
 src="http://vjs.zencdn.net/5.10.2/video.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>

<?php }
}
