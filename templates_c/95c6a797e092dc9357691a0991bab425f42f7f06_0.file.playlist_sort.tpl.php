<?php
/* Smarty version 3.1.29, created on 2016-07-06 17:11:15
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/playlist_sort.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d1f9363e182_24711784',
  'file_dependency' => 
  array (
    '95c6a797e092dc9357691a0991bab425f42f7f06' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/playlist_sort.tpl',
      1 => 1467817807,
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
function content_577d1f9363e182_24711784 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Playlist umsortieren</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/profile.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="css/playlistSort.css" />

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="js/sortable.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/sort.js"><?php echo '</script'; ?>
>
</head>
<body>
<section id="wrapper">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <section id="sortPlaylist" class="content">
        <h3><i class="fa fa-sort-amount-desc orange" aria-hidden="true"></i> Playlist umsortieren</h3>
        <hr class="orange"/>
        <input id="playListID" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['playlistID']->value;?>
" />

        <?php if ($_smarty_tpl->tpl_vars['videosTotal']->value > 1) {?>
            <ol id="playlistVideosSort">

            <?php
$_from = $_smarty_tpl->tpl_vars['videos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_0_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->iteration=0;
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$_smarty_tpl->tpl_vars['entry']->iteration++;
$__foreach_entry_0_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                <li data-id="<?php echo $_smarty_tpl->tpl_vars['entry']->iteration-1;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->title;?>
</li>

            <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_local_item;
}
if ($__foreach_entry_0_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_item;
}
?>
            </ol>
        <?php } else { ?>

        Diese Playlist enhält keine Videos die sortiert werden könnten.

        <?php }?>
    </section>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
