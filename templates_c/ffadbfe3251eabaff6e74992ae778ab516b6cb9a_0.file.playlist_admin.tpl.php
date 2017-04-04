<?php
/* Smarty version 3.1.29, created on 2016-07-08 22:23:07
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/playlist_admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57800babb1cef5_39440525',
  'file_dependency' => 
  array (
    'ffadbfe3251eabaff6e74992ae778ab516b6cb9a' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/playlist_admin.tpl',
      1 => 1467816397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57800babb1cef5_39440525 ($_smarty_tpl) {
?>
<section id="playlist_admin_view" class="content">
    <h3><i class="fa fa-map-signs orange" aria-hidden="true"></i> Playlistverwaltung von allen Usern </h3>
    <hr class="orange"/>

    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php } elseif (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
        <div class="alert alert-success" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

        </div>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
        <form action="./playlist?edit=<?php echo $_smarty_tpl->tpl_vars['play_id']->value;?>
" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" name="cat_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['play_name']->value;?>
">
                <span class="input-group-btn">
                    <input class="btn btn-info" type="submit" name="save" value="Speichern" />
                </span>
            </div>
        </form>
    <?php } else { ?>
        <br />
        <?php if (empty($_smarty_tpl->tpl_vars['playlists']->value)) {?>
            Die User haben keine Playlists
        <?php } else { ?>
        <table class="table table-hover table-striped">
            <tr>
                <th>ID</th>
                <th>Owner</th>
                <th>public?</th>
                <th>Letzte Änderung</th>
                <th>Name</th>
                <th>Videos</th>
                <th></th>
            </tr>
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
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->ownername;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->public;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->timestamp;?>
</td>
                    <td><input type="text" onchange="$(this).css({ 'box-shadow':'red 0 0 5px 1.5px' })" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->videos->total;?>
</td>
                        <td>
                            <p onclick="var name = $('#<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
').val();
                                     window.location.href='./playlist?edit=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
&user=<?php echo $_smarty_tpl->tpl_vars['entry']->value->ownerid;?>
&name='+name+
                                    '&offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
'">Edit</p>
                            <a href="./playlist?delete=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
&user=<?php echo $_smarty_tpl->tpl_vars['entry']->value->ownerid;?>
&offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">Löschen</a>
                        </td>
                </tr>

            <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_local_item;
}
if ($__foreach_entry_0_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_item;
}
?>
        </table>
            <?php }?>

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['anzahlPlay']->value/$_smarty_tpl->tpl_vars['step']->value;
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
            <a href="./playlist?offset=<?php echo ($_smarty_tpl->tpl_vars['var']->value-1)*$_smarty_tpl->tpl_vars['step']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a>
        <?php }
}
?>


    <?php }?>


</section><?php }
}
