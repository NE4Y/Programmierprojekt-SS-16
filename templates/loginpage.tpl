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
<div id="c-mask-login" class="c-mask"></div><!-- /c-mask for login -->