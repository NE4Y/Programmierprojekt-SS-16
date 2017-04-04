<?php
/* Smarty version 3.1.29, created on 2016-07-06 17:24:28
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/rightsmanagment.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d22ac1c5b80_63541831',
  'file_dependency' => 
  array (
    '2bc915ca1beea90f1872c7604ee455d344864abd' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/rightsmanagment.tpl',
      1 => 1467818665,
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
function content_577d22ac1c5b80_63541831 ($_smarty_tpl) {
?>
<!--
Author: Steffen Lindner
-->
<!DOCTYPE html>
<html>
<head>
    <title>Rechteverwaltung</title>

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


<section id="rightsmanagment" class="content">
    <h3><i class="fa fa-user-secret orange" aria-hidden="true"></i> Rechtemanagment</h3>
    <hr class="orange"/>

    <div class="input-group">
        <input type="text" class="form-control" id="searchUsers" data-provide="typeahead" placeholder="Search for user...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
      </span>
    </div><!-- /input-group -->

    <br />

    <table class="table table-hover table-bordered">
        <tr>
            <th></th>
            <th>#</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Videos</th>
            <th>Playlists</th>
            <th>Type</th>
            <th></th>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
            <tr>
                <td><a href="./profile?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><img width="25px" src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"></a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->mail;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->videos->total;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->playlists->total;?>
</td>
                <td>
                    <select name="rights" data-userid="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                        <option name="user" <?php if ($_smarty_tpl->tpl_vars['user']->value->type == "Benutzer") {?>selected<?php }?> value="2">Benutzer</option>
                        <option name="privuser" <?php if ($_smarty_tpl->tpl_vars['user']->value->type == "Privilegierter Benutzer") {?>selected<?php }?> value="3">Priv. Benutzer</option>
                        <option name="admin" <?php if ($_smarty_tpl->tpl_vars['user']->value->type == "Administrator") {?>selected<?php }?> value="4">Admin</option>
                    </select>
                </td>
                <td><i class="fa fa-trash" aria-hidden="true" style="cursor:pointer;" onclick="
                window.location.href='./rightsmanagment?delete=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
&offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
'"></i>
                    </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>

    </table>

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['usersTotal']->value/$_smarty_tpl->tpl_vars['usersSteps']->value;
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
        <a href="./rightsmanagment?offset=<?php echo ($_smarty_tpl->tpl_vars['var']->value-1)*$_smarty_tpl->tpl_vars['usersSteps']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a>
    <?php }
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
