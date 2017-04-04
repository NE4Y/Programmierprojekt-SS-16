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


    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    {include file="header.tpl"}
</head>
<body>
<section id="wrapper">
{include file="topbar.tpl"}

{include file="nav.tpl"}

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
        {foreach from=$users item="user"}
            <tr>
                <td><a href="./profile?id={$user->id}"><img width="25px" src="https://robohash.org/{$user->id}"></a></td>
                <td>{$user->id}</td>
                <td>{$user->username}</td>
                <td>{$user->mail}</td>
                <td>{$user->videos->total}</td>
                <td>{$user->playlists->total}</td>
                <td>
                    <select name="rights" data-userid="{$user->id}">
                        <option name="user" {if $user->type == "Benutzer"}selected{/if} value="2">Benutzer</option>
                        <option name="privuser" {if $user->type == "Privilegierter Benutzer"}selected{/if} value="3">Priv. Benutzer</option>
                        <option name="admin" {if $user->type == "Administrator"}selected{/if} value="4">Admin</option>
                    </select>
                </td>
                <td><i class="fa fa-trash" aria-hidden="true" style="cursor:pointer;" onclick="
                window.location.href='./rightsmanagment?delete={$user->id}&offset={$offset}'"></i>
                    </td>
            </tr>
        {/foreach}

    </table>

    {for $var=1 to {$usersTotal / $usersSteps}}
        <a href="./rightsmanagment?offset={($var-1) * $usersSteps}">{$var}</a>
    {/for}
</section>
</section>

{include file="footer.tpl"}


</body>
</html>

