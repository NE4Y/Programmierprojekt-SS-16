<?php
/* Smarty version 3.1.29, created on 2016-07-06 16:47:02
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d19e66b6804_00696438',
  'file_dependency' => 
  array (
    '51b7705a9af007e360e8ee334b135235ac409133' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/footer.tpl',
      1 => 1467816397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577d19e66b6804_00696438 ($_smarty_tpl) {
?>
<footer>
    <ul>
        <li><a href="http://www.uni-tuebingen.de/impressum.html">Impressum</a></li>
        <li><a href="./doku"><i class="fa fa-book white" aria-hidden="true"></i> Dokumentation</a></li>
        <li><a href="https://twitter.com/WolfGang_PPSS16"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    </ul>

    <div class="clear"></div>

    <a href="#top" id="top-link"><img src="img/top2.png" alt="top" /></a>

</footer>
<?php if (isset($_smarty_tpl->tpl_vars['notify']->value)) {?>
    <section id="notifyBox">
        <ul>
           <?php
$_from = $_smarty_tpl->tpl_vars['notify']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n_0_saved_item = isset($_smarty_tpl->tpl_vars['n']) ? $_smarty_tpl->tpl_vars['n'] : false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$__foreach_n_0_saved_local_item = $_smarty_tpl->tpl_vars['n'];
?>
                <li><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</li>
            <?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_0_saved_local_item;
}
if ($__foreach_n_0_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_0_saved_item;
}
?>
        </ul>
    </section>
<?php }
}
}
