<?php
/* Smarty version 3.1.29, created on 2016-06-18 15:00:23
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576545e713b502_40767106',
  'file_dependency' => 
  array (
    'e1ef7a0e0c0f6c6a13154ab9b2f2b76b3bdab983' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/home.tpl',
      1 => 1466254808,
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
function content_576545e713b502_40767106 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- customn css -->
    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/hot_videos.css"/>

    <link rel="stylesheet" type="text/css" href="css/video_of_the_week.css"/>

    <link rel="stylesheet" type="text/css" href="css/tweets.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link href="css/video-js.css" rel="stylesheet">

    <?php echo '<script'; ?>
 async src="//platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
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
<section id="hot_videos">
    <?php
$_from = $_smarty_tpl->tpl_vars['popularVideos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_popEntry_0_saved_item = isset($_smarty_tpl->tpl_vars['popEntry']) ? $_smarty_tpl->tpl_vars['popEntry'] : false;
$_smarty_tpl->tpl_vars['popEntry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['popEntry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['popEntry']->value) {
$_smarty_tpl->tpl_vars['popEntry']->_loop = true;
$__foreach_popEntry_0_saved_local_item = $_smarty_tpl->tpl_vars['popEntry'];
?>
        <article>
       <span class="play" aria-hidden="true">
           <a href="video?id=<?php echo $_smarty_tpl->tpl_vars['popEntry']->value->id;?>
"><img src="img/play-icon_red.png"/></a>
       </span>
            <img class="popthumbnails" src="<?php echo $_smarty_tpl->tpl_vars['popEntry']->value->previews->items[2]->uri;?>
"/>
            <div class="image_text">
                <p><?php echo $_smarty_tpl->tpl_vars['popEntry']->value->title;?>
</p>

                <label>Action</label>
            </div>
        </article>
    <?php
$_smarty_tpl->tpl_vars['popEntry'] = $__foreach_popEntry_0_saved_local_item;
}
if ($__foreach_popEntry_0_saved_item) {
$_smarty_tpl->tpl_vars['popEntry'] = $__foreach_popEntry_0_saved_item;
}
?>
    <div class="clear"></div>
</section>

<section id="tweets">
    <a class="twitter-grid" data-limit="3" href="https://twitter.com/TwitterDev/timelines/539487832448843776">National Park Tweets</a> <?php echo '<script'; ?>
 async src="https//platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
>
</section>

<section id="video_of_the_week">
    <h2><i class="fa fa-video-camera orange" aria-hidden="true"></i>Video of the week</h2>
    <hr/>
    <video id="my-video" class="video-js" controls preload="auto"
           poster="<?php echo $_smarty_tpl->tpl_vars['hottestvideothumb']->value;?>
" data-setup="{}">
        <source src=<?php echo $_smarty_tpl->tpl_vars['hottestvideolink']->value;?>
 type="video/mp4">
    </video>

</section>

    <section id="cat_cloud">
        <h2><i class="fa fa-cloud orange" aria-hidden="true"></i>Tag Cloud</h2>
            <?php
$_from = $_smarty_tpl->tpl_vars['home']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_1_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_1_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                <?php if ($_smarty_tpl->tpl_vars['entry']->value->videos->total == 0) {?>
                <a href="./kategories?view=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" class="small_cat"><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['entry']->value->videos->total > 0 && $_smarty_tpl->tpl_vars['entry']->value->videos->total <= 10) {?>
                    <a href="./kategories?view=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" class="middle_cat"><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['entry']->value->videos->total > 10) {?>
                    <a href="./kategories?view=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" class="big_cat"><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</a>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_local_item;
}
if ($__foreach_entry_1_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_item;
}
?>
    </section>

</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





</body>
</html>

<?php }
}
