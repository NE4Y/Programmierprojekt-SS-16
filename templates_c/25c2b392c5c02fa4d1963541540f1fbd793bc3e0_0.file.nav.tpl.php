<?php
/* Smarty version 3.1.29, created on 2016-07-06 16:50:51
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d1acb4db436_38791220',
  'file_dependency' => 
  array (
    '25c2b392c5c02fa4d1963541540f1fbd793bc3e0' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/nav.tpl',
      1 => 1467816649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577d1acb4db436_38791220 ($_smarty_tpl) {
?>
<nav id="c-menu-slide-left" class="c-menu c-menu-slide-left">
    <div id="button_close">
        <button class="c-menu_close fa fa-close"></button>
    </div>
    <ul class="c-menu_items">
        <li class="c-menu_items">
            <a href="./"><i class="fa fa-home" aria-hidden="true"></i> Startseite</a>
        </li>
        <li class="c-menu_items">
            <a href="./playlist"><i class="fa fa-th-list" aria-hidden="true"></i> Playlists</a>
        </li>
        <li class="c-menu_items">
            <a href="./videolist"><i class="fa fa-fire" aria-hidden="true"></i> Neuste Videos</a>
        </li>
        <li class="c-menu_items">
            <a href="./favorites"><i class="fa fa-star" aria-hidden="true"></i> Favoriten</a>
        </li>


        <?php if (isset($_smarty_tpl->tpl_vars['rights']->value) && $_smarty_tpl->tpl_vars['rights']->value >= 4) {?>
            <li class="c-menu_items">
                <a href="./rightsmanagment"> <i class="fa fa-user-secret" aria-hidden="true"></i> Usermanagment</a>
            </li>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['rights']->value) && $_smarty_tpl->tpl_vars['rights']->value >= 3) {?>
            <li class="c-menu_items">
                <a href="./upload"> <i class="fa fa-upload black" aria-hidden="true"></i> Upload</a>
            </li>
        <?php }?>

            <li class="c-menu_items">
                <a href="./kategories"><i class="fa fa-map-signs" aria-hidden="true"></i> Kategorien</a>
            </li>

        <?php if (isset($_smarty_tpl->tpl_vars['loggedIn']->value)) {?>

            <li class="c-menu_items">
                <a href="./profile"> <i class="fa fa-user black" aria-hidden="true"></i> Profil</a>
            </li>



        <?php }?>
    </ul>
    <div id="nav_img">
        <span> </span>
    </div>
</nav>
<div id="c-mask" class="c-mask"></div><!-- /c-mask -->
<?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
<?php }
}
