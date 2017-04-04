<?php
/* Smarty version 3.1.29, created on 2016-06-18 15:10:03
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5765482b67f1d6_79089781',
  'file_dependency' => 
  array (
    'b6a2f71f16a0cbc944e020a5e15268167c755a1f' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/profile.tpl',
      1 => 1466255260,
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
function content_5765482b67f1d6_79089781 ($_smarty_tpl) {
?>
<!--
Author: Steffen Lindner
-->
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/profile.css"/>

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



<section id="profile" class="content">
    <h3><i class="fa fa-user orange" aria-hidden="true"></i> Profil</h3>
    <hr class="orange"/>

    <div class="fluid-container">
        <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
            <form method="post" action=""  id ="registerform" name="registerform">

                <div class="input-group">
                    <span class="input-group-addon" >Realname</span>
                    <input required type="text" class="form-control" name="realname" id="realname" value="<?php echo $_smarty_tpl->tpl_vars['realname']->value;?>
" aria-describedby="sizing-addon2">
                </div>

                <br />

                <div class="input-group">
                    <span class="input-group-addon" >Emailadd.</span>
                    <input required type="email" class="form-control" name="email" id="mail"  value="<?php echo $_smarty_tpl->tpl_vars['usermail']->value;?>
" aria-describedby="sizing-addon2">
                </div>

                <br />

                <input type="submit" class="btn btn-info" name="save" value="Speichern" />


            </form>

            <br />

            <a href="./profile" class="blue">Zurück</a>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['changePW']->value)) {?>
            <form method="post" action="./profile?action=changePassword">

                <div class="input-group">
                    <span class="input-group-addon" >Neues Password</span>
                    <input required type="password" class="form-control" name="pw" placeholder="*******" aria-describedby="sizing-addon2">
                </div>

                <br />

                <input type="submit" class="btn btn-info" name="updatePW" value="Speichern" />
            </form>
        <?php } else { ?>
        <div class="row">
            <?php if (isset($_smarty_tpl->tpl_vars['foreignProfile']->value)) {?>
                <div class="col-xs-4">
                    <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['foreignId']->value;?>
" alt="user icon" />
                </div>
                <div class="col-xs-7 col-xs-offset-1">
                    <table class="table table-striped">
                        <tr>
                            <th>Realname: </th>
                            <td><?php echo $_smarty_tpl->tpl_vars['foreignRealName']->value;?>
</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['foreignMail']->value;?>
</td>
                        </tr>
                    </table>

                </div>
            <?php } else { ?>
            <div class="col-xs-4">
                <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" alt="user icon" />
            </div>
            <div class="col-xs-7 col-xs-offset-1">
                <table class="table table-striped">
                    <tr>
                        <th>Username: </th>
                        <td><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</td>
                    </tr>
                    <tr>
                        <th>Realname: </th>
                        <td><?php echo $_smarty_tpl->tpl_vars['realname']->value;?>
</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['usermail']->value;?>
</td>
                    </tr>
                </table>

                <a href="./profile?action=edit"><i class="fa fa-pencil-square" aria-hidden="true"></i> Bearbeiten</a>
                <br />
                <a href="./profile?action=changePassword"><i class="fa fa-key" aria-hidden="true"></i> Passwort ändern</a>
            </div>
            <?php }?>
        </div>
        <?php }?>
    </div>

</section>
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>

<?php }
}
