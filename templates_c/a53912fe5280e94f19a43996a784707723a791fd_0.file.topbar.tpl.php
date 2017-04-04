<?php
/* Smarty version 3.1.29, created on 2016-07-05 16:44:08
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/topbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577bc7b822a003_88050534',
  'file_dependency' => 
  array (
    'a53912fe5280e94f19a43996a784707723a791fd' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/topbar.tpl',
      1 => 1467729822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loginpage.tpl' => 1,
    'file:register.tpl' => 1,
  ),
),false)) {
function content_577bc7b822a003_88050534 ($_smarty_tpl) {
?>
<header>
    <div class="container-fluid">
        <div class="row">
            <div id="o-wrapper" class="o-wrapper col-xs-1">
                <div class="c-buttons">
                    <button id="c-button-slide-left" class="c-button fa fa-bars"></button>
                </div>
            </div>

            <div class="col-xs-2" id="logo">
                <a href="./"> <span class="blue">WolfGang</span></a>
            </div>

            <div class="col-xs-6" id="top-search">
                <!-- /btn-group -->
                <div class="input-group" id="search">
                    <div class="input-group-addon" id="select">
                        <select class="selectpicker" id="options">
                            <option>Alle</option>
                            <option>Videos</option>
                            <option>Kategorien</option>
                            <option>Playlist</option>
                        </select>
                    </div>
                    <input type="text" data-provide="typeahead" id="search-title" class="form-control" placeholder="Suche..." aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2" onclick="search()">
                        <button type="submit" class="fa fa-search"
                         aria-hidden="true" onclick="search()">
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-xs-2 col-xs-offset-1" id="login-wrapper">
                <?php if (isset($_smarty_tpl->tpl_vars['loggedIn']->value)) {?>
                   <span><img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" /> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
                   <a href="./?action=logout" class=""><i class="fa fa-sign-out orange"></i></a>
                <?php } else { ?>
                <span><i class="fa fa-user orange" aria-hidden="true"></i>
                <button class="orange" id="login">Login</button></span>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="clear"></div>

</header>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:loginpage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
