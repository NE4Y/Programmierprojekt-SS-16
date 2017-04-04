<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/profile.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    {include file="header.tpl"}
</head>
<body>
<section id="wrapper">
{include file="topbar.tpl"}
{include file="nav.tpl"}


<section id="profile" class="content">
    <h3><i class="fa fa-user orange" aria-hidden="true"></i> Profil</h3>
    <hr class="orange"/>

    {if isset($profile404)}
        <p>Dieser User existiert nicht.</p>
    {else}

    <div class="fluid-container">
        {if isset($edit)}
            <form method="post" action=""  id ="registerform" name="registerform">

                <div class="input-group">
                    <span class="input-group-addon" >Realname</span>
                    <input required type="text" class="form-control" name="realname" id="realname" value="{$realname}" aria-describedby="sizing-addon2">
                </div>

                <br />

                <div class="input-group">
                    <span class="input-group-addon" >Emailadd.</span>
                    <input required type="email" class="form-control" name="email" id="mail"  value="{$usermail}" aria-describedby="sizing-addon2">
                </div>

                <br />

                <input type="submit" class="btn btn-info" name="save" value="Speichern" />


            </form>

            <br />

            <a href="./profile" class="blue">Zurück</a>
        {elseif isset($changePW)}
            <form method="post" action="./profile?action=changePassword">

                <div class="input-group">
                    <span class="input-group-addon" >Neues Password</span>
                    <input required type="password" class="form-control" name="pw" placeholder="*******" aria-describedby="sizing-addon2">
                </div>

                <br />

                <input type="submit" class="btn btn-info" name="updatePW" value="Speichern" />
            </form>
        {else}
        <div class="row">
            {if isset($foreignProfile)}
                <div class="col-xs-4">
                    <img src="https://robohash.org/{$foreignId}" alt="user icon" />
                </div>
                <div class="col-xs-7 col-xs-offset-1">
                    <table class="table table-striped">
                        <tr>
                            <th>Realname: </th>
                            <td>{$foreignRealName}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{$foreignMail}</td>
                        </tr>
                    </table>

                </div>
            {else}
            <div class="col-xs-4">
                <img src="https://robohash.org/{$userid}" alt="user icon" />
            </div>
            <div class="col-xs-7 col-xs-offset-1">
                <table class="table table-striped">
                    <tr>
                        <th>Username: </th>
                        <td>{$username}</td>
                    </tr>
                    <tr>
                        <th>Realname: </th>
                        <td>{$realname}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{$usermail}</td>
                    </tr>
                </table>

                <a href="./profile?action=edit"><i class="fa fa-pencil-square" aria-hidden="true"></i> Bearbeiten</a>
                <br />
                <a href="./profile?action=changePassword"><i class="fa fa-key" aria-hidden="true"></i> Passwort ändern</a>
            </div>
            {/if}
        </div>
        {/if}
    </div>

</section>
    {if !(isset($edit)) && !(isset($changePW))}
    <section id="myVideos" class="content">
        <h3><i class="fa fa-video-camera orange" aria-hidden="true"></i> Eigene Videos</h3>
        <hr class="orange"/>

        {if $totalVideo > 0}
            {foreach from=$videos item=entry}
               <a class="link-wrapper" href="./video?id={$entry->id}"><img src="{$entry->previews->items[0]->uri}" />
               <div class="popupMenu">
                   {$entry->title}
                   {if $entry->uploaderid == $userid || $rights >= 4}
                     <span onclick="location.href = './profile?delete={$entry->id}'; return false;" class="fa fa-trash"></span>
                   {/if}
               </div></a>
            {/foreach}

            <div class="clear"></div>

        {else}
            <p>Es existieren keine Videos.</p>
        {/if}
    </section>
        <section id="myPlaylists" class="content">
            <h3><i class="fa fa-th-list orange" aria-hidden="true"></i>Playlists</h3>
            <hr class="orange"/>

            {if $playlists->total > 0}
                <table class="table table-striped">
                {foreach from=$playlists->items item=playlist}
                        <tr>
                            <th><a href="./playlistdetail?id={$playlist->id}">{$playlist->name}</a></th>
                            <td>{$playlist->videos->total} Videos</td>
                            <td>{$playlist->followers->total} Follower</td>
                        </tr>
                        </tr>
                {/foreach}
                </table>
            {/if}


            {/if}
            {/if}
        </section>



    <div class="clear"></div>
</section>


{include file="footer.tpl"}

</body>
</html>
