<!DOCTYPE html>
<html>
<head>
    <title>Kategorien</title>


    {include file="header.tpl"}

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

</head>
<body>
<section id="wrapper">
    {include file="topbar.tpl"}

    {include file="nav.tpl"}

    <section id="kategorien" class="content">
        <h3><i class="fa fa-map-signs orange" aria-hidden="true"></i> Kategorien</h3>
        <hr class="orange"/>

        {if isset($error)}
            <div class="alert alert-danger" role="alert">
                {$error}
            </div>
        {elseif isset($success)}
            <div class="alert alert-success" role="alert">
                {$success}
            </div>
        {/if}

        {if isset($edit)}
            {if isset($kat_error)}
                Diese Kategorie scheint nicht zu existieren.
            {else}
                <form action="./kategories?edit={$kat_id}" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" name="cat_name" placeholder="{$kat_name}">
                <span class="input-group-btn">
                    <input class="btn btn-info" type="submit" name="save" value="Speichern" />
                </span>
                </div>
            </form>
                {/if}
        {elseif isset($showCat)}

            {if $videosTotal == 0}
                <h2>{$katname}</h2>
                <div class="alert alert-danger" role="alert">Keine Videos in dieser Kategorie.</div>
            {else}

            <h2>{$katname}</h2>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>

                {foreach from=$videos item=entry}
                    <tr>
                        <td>{$entry->id}</td>
                        <td><a href="./video?id={$entry->id}">{$entry->title}</a></td>

                    </tr>

                {/foreach}

            </table>
            {/if}

        {else}
        {if isset($userid) && $rights > 3}
            <form action="./kategories" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" name="cat_name" placeholder="New category">
                <span class="input-group-btn">
                    <input class="btn btn-info" type="submit" name="add" value="Eintragen" />
                </span>
            </div>
        </form>
        {/if}

        <br />

        <table class="table table-hover table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Videos</th>
                <th></th>

            </tr>
            {foreach from=$kategories item=entry}
                <tr>
                    <td>{$entry->id}</td>
                    <td>{$entry->name}</td>
                    <td>{$entry->videos->total}</td>
                    <td>
                        <a href="./kategories?view={$entry->id}"><i class="fa fa-search"></i></a>
                    {if isset($showEdit)}
                            <a href="./kategories?edit={$entry->id}">Edit</a>
                            {if isset($admin)}
                                <a href="./kategories?delete={$entry->id}">Löschen</a>
                            {/if}
                    {/if}
                    </td>

                </tr>

            {/foreach}
        </table>


        {for $var=1 to {$anzahlKat / $step}}
            <a href="./kategories?offset={($var-1) * $step}" {if ($offset/$step + 1) == $var} class="orange"{/if}>{$var}</a>
        {/for}

        {/if}


    </section>

</section>
{include file="footer.tpl"}
</body>
</html>

