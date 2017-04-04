<?php
/* Smarty version 3.1.29, created on 2016-07-06 17:40:31
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/loginpage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d266f51a703_98676604',
  'file_dependency' => 
  array (
    'b8fb19a0cc88777e739c762301252f8eb758790a' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/loginpage.tpl',
      1 => 1467819617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577d266f51a703_98676604 ($_smarty_tpl) {
?>
<div>
    <button class="fa fa-close" id="login_button_close"></button>
</div>
<section id="loginpage">
    <form action="./" method="post" id="loginform">
        <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input required type="text" class="form-control" name="username" placeholder="Username" aria-describedby="sizing-addon2">
        </div>


        <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
            <input required type="password" class="form-control" name="password" placeholder="*****" aria-describedby="sizing-addon2">
        </div>

        <button type="submit" class="btn btn-info" name="login">
            <i class="fa fa-sign-in white" aria-hidden="true"></i>
            Login
        </button>

    </form>
    <a href="" id="register_text">Registrieren</a>
</section>
<div id="c-mask-login" class="c-mask"></div><!-- /c-mask for login --><?php }
}
