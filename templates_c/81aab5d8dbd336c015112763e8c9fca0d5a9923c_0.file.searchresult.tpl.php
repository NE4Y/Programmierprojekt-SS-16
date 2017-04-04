<?php
/* Smarty version 3.1.29, created on 2016-07-10 18:45:53
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/searchresult.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57827bc115c293_95562947',
  'file_dependency' => 
  array (
    '81aab5d8dbd336c015112763e8c9fca0d5a9923c' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/searchresult.tpl',
      1 => 1468148599,
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
function content_57827bc115c293_95562947 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Suchergebnisse</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/searchresult.css"/>

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


    <!-- Content -->
    <section id="search-results">
        <?php if (isset($_smarty_tpl->tpl_vars['searchvideos']->value) && $_smarty_tpl->tpl_vars['searchvideos']->value == TRUE) {?>
        <?php if ($_smarty_tpl->tpl_vars['vidtotal']->value === "1") {?>
            <div id="numberofresults"> Es wurde <?php echo $_smarty_tpl->tpl_vars['vidtotal']->value;?>
 Video gefunden:</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['vidtotal']->value !== "1") {?>
            <div id="numberofresults"> Es wurden <?php echo $_smarty_tpl->tpl_vars['vidtotal']->value;?>
 Videos gefunden:</div>
        <?php }?>


        <?php
$_from = $_smarty_tpl->tpl_vars['videos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_0_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_0_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
            <div class="results">
                <div class="resultThumbnail">
                <span class="play" aria-hidden="true">
                    <a href="video?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
"><img src="img/play-icon_red.png"/></a>
                </span>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['entry']->value->previews->items[0]->uri;
$_tmp1=ob_get_clean();
if (substr($_tmp1,0,4) == "/srv") {?>
                    <img class="thumbnail_img" src="img/mp3.png" style="width:360px; height:200px;"/>
                    <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->previews->items[0]->uri;?>
">
                <?php }?>
                </div>
                <div class="description" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                    <h2><?php echo $_smarty_tpl->tpl_vars['entry']->value->title;?>
</h2>
                    <time id="time_<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->uploaddate;?>
</time>
                    <?php echo $_smarty_tpl->tpl_vars['entry']->value->description;?>

                </div>
                <?php echo '<script'; ?>
>
                    datesearchresult("time_<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
");
                <?php echo '</script'; ?>
>
                <?php if (isset($_smarty_tpl->tpl_vars['pid']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['pid']->value != null) {?>
                    <button id="add-to-myPl" class="fa fa-plus white playlistbutton"
                            onclick="window.location.href='playlist?pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
&vid=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
&add=1'">
                        <span> zu Playlist hinzufügen</span>
                    </button>
                <?php }?>
                <?php }?>
            </div>
        <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_local_item;
}
if ($__foreach_entry_0_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_item;
}
?>
    </section>
    <?php }?>


    <?php if (isset($_smarty_tpl->tpl_vars['searchcategories']->value) && $_smarty_tpl->tpl_vars['searchcategories']->value == True) {?>
        <?php if ($_smarty_tpl->tpl_vars['cattotal']->value === "1") {?>
            <div id="numberofresults"> Es wurde <?php echo $_smarty_tpl->tpl_vars['cattotal']->value;?>
 Kategorie gefunden:</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['cattotal']->value !== "1") {?>
        <div id="numberofresults"> Es wurden <?php echo $_smarty_tpl->tpl_vars['cattotal']->value;?>
 Kategorien gefunden:</div>
        <?php }?>
        <?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_1_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_1_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
            <div class="results">

                <a href="kategories?view=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                    <h2>Kategorie: <?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</h2>
                    <h3>Anzahl-Videos: <?php echo $_smarty_tpl->tpl_vars['entry']->value->videos->total;?>
</h3>
                </a>
            </div>
        <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_local_item;
}
if ($__foreach_entry_1_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_item;
}
?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['searchplaylists']->value) && $_smarty_tpl->tpl_vars['searchplaylists']->value == TRUE) {?>
        <?php if ($_smarty_tpl->tpl_vars['playtotal']->value === "1") {?>
            <div id="numberofresults"> Es wurde <?php echo $_smarty_tpl->tpl_vars['playtotal']->value;?>
 Playlist gefunden:</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['playtotal']->value !== "1") {?>
            <div id="numberofresults"> Es wurden <?php echo $_smarty_tpl->tpl_vars['playtotal']->value;?>
 Playlists gefunden:</div>
        <?php }?>
        <?php
$_from = $_smarty_tpl->tpl_vars['playlist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_2_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_2_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
            <div class="results">
                <a href="playlistdetail?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                    <h2>Playlist : <?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</h2>
                    <h3>Erstellt von : <?php echo $_smarty_tpl->tpl_vars['entry']->value->ownername;?>
</h3>

                </a>
            </div>
        <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_2_saved_local_item;
}
if ($__foreach_entry_2_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_2_saved_item;
}
?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['searchAll']->value) && $_smarty_tpl->tpl_vars['searchAll']->value == TRUE) {?>
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#home">Videos(<?php echo $_smarty_tpl->tpl_vars['vidtotal']->value;?>
)</a></li>
            <li><a data-toggle="pill" href="#menu1">Kategorien(<?php echo $_smarty_tpl->tpl_vars['cattotal']->value;?>
)</a></li>
            <li><a data-toggle="pill" href="#menu2">Playlists(<?php echo $_smarty_tpl->tpl_vars['playtotal']->value;?>
)</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

                <?php
$_from = $_smarty_tpl->tpl_vars['videos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_3_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_3_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                    <div class="results">
                        <div class="resultThumbnail">
                <span class="play" aria-hidden="true">
                    <a href="video?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
"><img src="img/play-icon_red.png"/></a>
                </span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->previews->items[0]->uri;?>
"></div>
                        <div class="description" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                            <h2><?php echo $_smarty_tpl->tpl_vars['entry']->value->title;?>
</h2>
                            <time id="time_<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->uploaddate;?>
</time>
                            <?php echo $_smarty_tpl->tpl_vars['entry']->value->description;?>

                        </div>
                        <?php echo '<script'; ?>
>
                            datesearchresult("time_<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
");
                        <?php echo '</script'; ?>
>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_3_saved_local_item;
}
if ($__foreach_entry_3_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_3_saved_item;
}
?>


            </div>
            <div id="menu1" class="tab-pane fade">

                <?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_4_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_4_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                    <div class="results">

                        <a href="kategories?view=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                            <h2>Kategorie: <?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</h2>
                            <h3>Anzahl-Videos: <?php echo $_smarty_tpl->tpl_vars['entry']->value->videos->total;?>
</h3>
                        </a>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_4_saved_local_item;
}
if ($__foreach_entry_4_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_4_saved_item;
}
?>
            </div>
            <div id="menu2" class="tab-pane fade">
                <?php
$_from = $_smarty_tpl->tpl_vars['playlist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_5_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_5_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                    <div class="results">
                        <a href="playlistdetail?id=<?php echo $_smarty_tpl->tpl_vars['entry']->value->id;?>
">
                            <h2>Playlist : <?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</h2>
                            <h3>Erstellt von : <?php echo $_smarty_tpl->tpl_vars['entry']->value->ownername;?>
</h3>

                        </a>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_5_saved_local_item;
}
if ($__foreach_entry_5_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_5_saved_item;
}
?>
            </div>
        </div>
    <?php }?>


</section>
</section>

<br />

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $('#menu_toggle').click(function () {
            $('nav').slideToggle(function () {
            });
        });

        $('#login').click(function () {
            $('section#loginpage').slideToggle(function () {
            });
        });
    });
<?php echo '</script'; ?>
>
</body>
</html>

<?php }
}
