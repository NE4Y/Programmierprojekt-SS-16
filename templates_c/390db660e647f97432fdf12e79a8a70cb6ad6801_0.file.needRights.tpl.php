<?php
/* Smarty version 3.1.29, created on 2016-07-06 16:46:07
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/needRights.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d19af849213_77788610',
  'file_dependency' => 
  array (
    '390db660e647f97432fdf12e79a8a70cb6ad6801' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/needRights.tpl',
      1 => 1467816318,
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
function content_577d19af849213_77788610 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>404</title>
    <!-- customn css -->
    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/hot_videos.css"/>

    <link rel="stylesheet" type="text/css" href="css/video_of_the_week.css"/>

    <link rel="stylesheet" type="text/css" href="css/tweets.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</head>
<body>
<section id="wrapper">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="404" class="content">
        <h1 style="font-family: 'Josefin Sans', sans-serif; font-size: 5em;">403</h1>
        <p style="line-height:1.8em;">
            Sie besitzen nicht die nötigen Rechte um diese Funktion zu nutzen.
        </p>
        <aside id="404_aside">
            <img src="img/wolf_move2.gif" style="margin-top: 5%;"/>
        </aside>
    </section>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}
