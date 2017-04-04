<?php
/* Smarty version 3.1.29, created on 2016-07-09 16:49:14
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/videolist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57810eea55fb35_09198967',
  'file_dependency' => 
  array (
    '5daccb8aef1f378cc224c3d434ae0e532c75aff2' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/videolist.tpl',
      1 => 1468075498,
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
function content_57810eea55fb35_09198967 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Neuste Videos</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/hot_videos.css"/>

    <link rel="stylesheet" type="text/css" href="css/video_of_the_week.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="css/videolist.css"/>

    <link rel="stylesheet" type="text/css" href="css/video-js.css"/>

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
<section id="recent_videos">
    <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Neuste Videos</h2>
    <div class="videos">
        <?php
$_from = $_smarty_tpl->tpl_vars['newestvids']->value;
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
            <article id="video_<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
">
       <span class="play" aria-hidden="true">
           <a href="./video?id=<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
">
               <img src="img/play-icon_red.png" />
           </a>
       </span>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['video']->value->previews->items[2]->uri;
$_tmp1=ob_get_clean();
if (substr($_tmp1,0,4) == "/srv") {?>
                    <img class="thumbnail_img" src="img/wolf_s.jpg" style="width:360px; height:200px;"/>
                <?php } else { ?>
                    <img class="thumbnail_img" src="<?php echo $_smarty_tpl->tpl_vars['video']->value->previews->items[2]->uri;?>
" />
                <?php }?>
                <div class="image_text">
                    <p><?php echo $_smarty_tpl->tpl_vars['video']->value->title;?>
</p>
                    <label><i class="fa fa-upload" aria-hidden="true"></i>
                        <time id="date_<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['video']->value->uploaddate;?>
</time>
                    </label>
                </div>
                <?php echo '<script'; ?>
>
                    datelabel("date_<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
");
                <?php echo '</script'; ?>
>
            </article>
        <?php
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_0_saved_local_item;
}
if ($__foreach_video_0_saved_item) {
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_0_saved_item;
}
?>
    </div>
    <div class="clear"></div>
</section>
    <section id="mostviewed">
        <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Meist gesehenes Video</h2>
        <hr />
        <video id="my-video" class="video-js" controls preload="auto"
               poster="<?php echo $_smarty_tpl->tpl_vars['mvv_thumb']->value;?>
" data-setup="{ }">
            <source src=<?php echo $_smarty_tpl->tpl_vars['mvv_videourl']->value;?>
 type="video/mp4">
        </video>
    </section>
    <section id="all_videos">
        <h2><i class="fa fa-video-camera blue" aria-hidden="true"></i>Alle Videos</h2>
        <div class="videos">
            <?php
$_from = $_smarty_tpl->tpl_vars['videos']->value;
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
                <article id="video_<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
">
       <span class="play" aria-hidden="true">
           <a href="./video?id=<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
">
               <img src="img/play-icon_red.png" />
           </a>
       </span>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['video']->value->previews->items[2]->uri;
$_tmp2=ob_get_clean();
if (substr($_tmp2,0,4) == "/srv") {?>
                        <img class="thumbnail_img" src="img/mp3.png" style="width:360px; height:200px;"/>
                    <?php } else { ?>
                        <img class="thumbnail_img" src="<?php echo $_smarty_tpl->tpl_vars['video']->value->previews->items[2]->uri;?>
" />
                    <?php }?>
                    <div class="image_text">
                        <p><?php echo $_smarty_tpl->tpl_vars['video']->value->title;?>
</p>
                        <label><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['video']->value->views;?>
</label>
                    </div>
                </article>
            <?php
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_1_saved_local_item;
}
if ($__foreach_video_1_saved_item) {
$_smarty_tpl->tpl_vars['video'] = $__foreach_video_1_saved_item;
}
?>
        </div>
        <div id="video_steps">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['anzahlVids']->value/$_smarty_tpl->tpl_vars['step']->value;
$_tmp3=ob_get_clean();
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_tmp3+1 - (1) : 1-($_tmp3)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
                <a href="./videolist?offset=<?php echo ($_smarty_tpl->tpl_vars['var']->value-1)*$_smarty_tpl->tpl_vars['step']->value;?>
#all_videos"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a>
            <?php }
}
?>

        </div>
        <style>
            #offset_<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
 {
                text-decoration: underline;
            }
        </style>
        <div class="clear"></div>
    </section>

</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="http://vjs.zencdn.net/5.10.2/video.js"><?php echo '</script'; ?>
>
</body>
</html>

<?php }
}
