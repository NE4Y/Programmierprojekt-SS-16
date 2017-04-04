<!DOCTYPE html>
<html>
<head>
    <title>Playlist umsortieren</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/profile.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="css/playlistSort.css" />

    {include file="header.tpl"}

    <script type="text/javascript" src="js/sortable.js"></script>
    <script type="text/javascript" src="js/sort.js"></script>
</head>
<body>
<section id="wrapper">
    {include file="topbar.tpl"}
    {include file="nav.tpl"}

    <section id="sortPlaylist" class="content">
        <h3><i class="fa fa-sort-amount-desc orange" aria-hidden="true"></i> Playlist umsortieren</h3>
        <hr class="orange"/>
        <input id="playListID" class="hidden" value="{$playlistID}" />

        {if $videosTotal > 1}
            <ol id="playlistVideosSort">

            {foreach from=$videos item=entry}
                <li data-id="{$entry@iteration-1}">{$entry->title}</li>

            {/foreach}
            </ol>
        {else}

        Diese Playlist enhält keine Videos die sortiert werden könnten.

        {/if}
    </section>
</section>

{include file="footer.tpl"}
</body>
</html>