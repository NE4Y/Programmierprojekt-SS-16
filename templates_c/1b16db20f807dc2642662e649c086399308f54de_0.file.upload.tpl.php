<?php
/* Smarty version 3.1.29, created on 2016-07-06 17:22:55
  from "/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/upload.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d224fd2faf7_86141806',
  'file_dependency' => 
  array (
    '1b16db20f807dc2642662e649c086399308f54de' => 
    array (
      0 => '/Users/Steffen/ownCloud/Projects/www/ProgrammierProjektSS16/templates/upload.tpl',
      1 => 1467816397,
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
function content_577d224fd2faf7_86141806 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Video</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/upload.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="http://plugins.krajee.com/assets/a4a70f41/css/fileinput.min.css">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 src="js/fileinput.js"><?php echo '</script'; ?>
>
</head>
<body>
<section id="wrapper">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Content -->
    <div class="col-md-10 col-md-offset-1">
        <div id="uploadBox">
            <div id="uploadButton">
            <form enctype="multipart/form-data" action="doUpload" method="post">

                <input id="file" name="file" type="file" class="file-loading">
                <div id="errorBlock" class="help-block">

                </div>
                <br />
                <input name="name" id="videoName" placeholder="Name" class="form-control" class="input-group" type="text">
                <br />
                <textarea name="description" id="videoDiscription" class="form-control" placeholder="Beschreibung"></textarea>
                <?php echo '<script'; ?>
>
                    $(document).on('ready', function() {
                        $("#file").fileinput({
                            maxFileSize: 0,
                            maxPreviewFileSize: 0,
                            showCaption: false,
                            maxFileCount: 1,
                            uploadUrl: 'doUpload',
                            uploadAsync: false,
                            allowedFileExtensions: ["mp4","mov","mpeg","wmv","avi","swf","flv","mpg"],
                            elErrorContainer: "#errorBlock",
                            uploadExtraData: function(previewId, index){
                                var name = $('#videoName')[0].value;
                                var description = $('#videoDiscription')[0].value;
                                return {
                                    name :name, description : description
                                };
                            }
                        });
                        $("#file").on('filebatchuploadcomplete', function(event, data, previewId, index) {
                            setTimeout(function () {
                                window.location.href = "http://localhost:8888/SoftwareProjekt/profile";
                            },1000);
                        });
                    });
                <?php echo '</script'; ?>
>
            </form>
            </div>
        </div>

   </div>
    <div class="clear"></div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>

<?php }
}
