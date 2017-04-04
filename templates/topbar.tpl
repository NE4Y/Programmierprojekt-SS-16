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
                {if isset($loggedIn)}
                   <span><img src="https://robohash.org/{$userid}" /> {$username}</span>
                   <a href="./?action=logout" class=""><i class="fa fa-sign-out orange"></i></a>
                {else}
                <span><i class="fa fa-user orange" aria-hidden="true"></i>
                <button class="orange" id="login">Login</button></span>
                {/if}
            </div>
        </div>
    </div>
    <div class="clear"></div>

</header>

{include file="loginpage.tpl"}
{include file="register.tpl"}