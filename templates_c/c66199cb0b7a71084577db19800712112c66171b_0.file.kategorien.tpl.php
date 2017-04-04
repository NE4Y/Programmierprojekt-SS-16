<?php
/* Smarty version 3.1.29, created on 2016-07-09 17:58:00
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/kategorien.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57811f0867d608_29250174',
  'file_dependency' => 
  array (
    'c66199cb0b7a71084577db19800712112c66171b' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/kategorien.tpl',
      1 => 1468079855,
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
function content_57811f0867d608_29250174 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kategorien</title>


    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

</head>
<body>
<section id="wrapper">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <section id="kategorien" class="content">
        <h3><i class="fa fa-map-signs orange" aria-hidden="true"></i> Kategorien</h3>
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
            <?php if (isset($_smarty_tpl->tpl_vars['kat_error']->value)) {?>
                Diese Kategorie scheint nicht zu existieren.
            <?php } else { ?>
                <form action="./kategories?edit=<?php echo $_smarty_tpl->tpl_vars['kat_id']->value;?>
" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" name="cat_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['kat_name']->value;?>
">
                <span class="input-group-btn">
                    <input class="btn btn-info" type="submit" name="save" value="Speichern" />
                </span>
                </div>
            </form>
                <?php }?>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['showCat']->value)) {?>

            <?php if ($_smarty_tpl->tpl_vars['videosTotal']->value == 0) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['katname']->value;?>
</h2>
                <div class="alert alert-danger" role="alert">Keine Videos in dieser Kategorie.</div>
            <?php } else { ?>

            <h2><?php echo $_smarty_tpl->tpl_vars['katname']->value;?>
</h2>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>

                <?php
$_from = $_smarty_tpl->tpl_vars['videos']->value;
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
                        <td><a href="./video?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->title;?>
</a></td>

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

        <?php } else { ?>
        <?php if (isset($_smarty_tpl->tpl_vars['userid']->value) && $_smarty_tpl->tpl_vars['rights']->value > 3) {?>
            <form action="./kategories" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" name="cat_name" placeholder="New category">
                <span class="input-group-btn">
                    <input class="btn btn-info" type="submit" name="add" value="Eintragen" />
                </span>
            </div>
        </form>
        <?php }?>

        <br />

        <table class="table table-hover table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Videos</th>
                <th></th>

            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['kategories']->value;
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
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value->videos->total;?>
</td>
                    <td>
                        <a href="./kategories?view=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
"><i class="fa fa-search"></i></a>
                    <?php if (isset($_smarty_tpl->tpl_vars['showEdit']->value)) {?>
                            <a href="./kategories?edit=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">Edit</a>
                            <?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {?>
                                <a href="./kategories?delete=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">Löschen</a>
                            <?php }?>
                    <?php }?>
                    </td>

                </tr>

            <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_local_item;
}
if ($__foreach_entry_1_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_item;
}
?>
        </table>


        <?php ob_start();
echo $_smarty_tpl->tpl_vars['anzahlKat']->value/$_smarty_tpl->tpl_vars['step']->value;
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
            <a href="./kategories?offset=<?php echo ($_smarty_tpl->tpl_vars['var']->value-1)*$_smarty_tpl->tpl_vars['step']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['offset']->value/$_smarty_tpl->tpl_vars['step']->value+1) == $_smarty_tpl->tpl_vars['var']->value) {?> class="orange"<?php }?>><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a>
        <?php }
}
?>


        <?php }?>


    </section>

</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>

<?php }
}
