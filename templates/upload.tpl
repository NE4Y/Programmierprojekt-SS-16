<!DOCTYPE html>
<html>
<head>
    <title>Video</title>

    <link rel="stylesheet" type="text/css" href="css/core.css"/>

    <link rel="stylesheet" type="text/css" href="css/upload.css"/>

    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <link rel="stylesheet" type="text/css" href="http://plugins.krajee.com/assets/a4a70f41/css/fileinput.min.css">
    {include file="header.tpl"}

    <script src="js/fileinput.js"></script>
</head>
<body>
<section id="wrapper">
    {include file="topbar.tpl"}
    {include file="nav.tpl"}

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
                <script>
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
                                window.location.href = "./profile";
                            },1000);
                        });
                    });
                </script>
            </form>
            </div>
        </div>

   </div>
    <div class="clear"></div>
{include file="footer.tpl"}

</body>
</html>
