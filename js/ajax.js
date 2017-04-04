/**
 * Created by Steffen on 01.06.16.
 * using .on to detect dynamicly added elements
 */
$(document).ready(function() {

    $(document).on("click", '#save_comment', function () {
        var comment = $('#comment_field').val();
        var video_id = $('#video_id').val();
        $.ajax({
            type: "POST",
            url: "./addComment",
            data: {video_id: video_id, comment: comment},
            success: function (result) {
                if (result != "0") {
                    var notify = new Notify("Kommentar gespeichert.");
                    notify.showNotification();
                    var data = JSON.parse(result);
                    $('#comment_sec').prepend(" <article><img src='https://robohash.org/"+$('#user_id').val()+"' alt='usericon' /><h6>" + data.username + "<span> " + data.timestamp + "</span> <i class='fa fa-trash deleteComment' data-commentID='" + data.id + "'></i></h6> " + "<p>" + comment + "</p> <div class='clear'></div> </article>");
                    $('#comment_field')[0].value =  "";
                }
            }
        });
    });


    // delete comments
    $(document).on("click", ".deleteComment", function () {
        var id = $(this).attr("data-commentID");
        var video_id = $('#video_id').val();
        var comment = $(this);

        $.ajax({
            type: "POST",
            url: "./deleteComment",
            data: {video_id: video_id, comment_id: id},
            success: function (result) {
                if (result != "0") {
                    var notify = new Notify("Kommentar gelöscht.");
                    notify.showNotification();
                    comment.parent().parent().hide();
                }
            }
        });
        
    });

    $(document).on("click", ".rating-star", function(e) {
        e.preventDefault();

        var notify = new Notify("Rating speichern ...");
        notify.showNotification();

        var star = $(this).prev();

        var rating = $(this).attr("for").slice(-1);
        var video_id = $('#video_id').val();

        $.ajax({
            type: "POST",
            url: "./addRating",
            data: {video_id: video_id, rating: rating},
            success: function(result) {
                $('input.rating-input').removeAttr("checked");
                console.log(star);
                star.prop("checked", true);
                var notify = new Notify(result);
                notify.showNotification();
                console.log(result);
            }
        });

    });

    $('#search-title').typeahead({
        onSelect: function(item) {
            console.log(item);
        },
        alignWidth :false,
        ajax: {
            url: './searchajax',
            items: 10,
            timeout: 500,
            valueField: 'id',
            displayField: 'name',
            triggerLength: 1,
            method: "post",
            dataType: "JSON",
            preDispatch: function (query) {
                return {
                    query: query,
                    type: $('#options').val()
                }
            },
            preProcess: function (data) {
                if (data.success === false) {
                    return false;
                }else{
                    if (data.results){
                        return data.results;
                    }
                    else{
                        return [].concat(data.resultsV,data.resultsC,data.resultsP);
                    }

                }
            }
        }
    });

    $('#searchUsers').typeahead({
        onSelect: function(item) {
            window.location.href='./rightsmanagment?id='+item.value;
        },
        ajax: {
            url: './usersearch',
            items: 1,
            timeout: 500,
            valueField: 'id',
            displayField: 'name',
            triggerLength: 1,
            method: "post",
            dataType: "JSON",
            preDispatch: function (query) {
                if (query == ':all'){
                    window.location.href='./rightsmanagment';
                }else{
                return {
                    query: query
                }
                }
            },
            preProcess: function (data) {
                if (data.success === false) {
                    return false;
                }else{
                    if (data.results){
                        return data.results;
                    }
                }
            }
        }
    });

    $('#rightsmanagment select').focus(function() {
        //Store old value
        $(this).data('lastValue', $(this).val());
        console.log("stored");
    });
    // rights managment change user type
    $('#rightsmanagment select').change(function(e) {

        var newType = $(this).val();
        var id = $(this).data("userid");
        var select = $(this);

        $.ajax({
            url: './updateUser',
            type: 'POST',
            data: {newType:newType, id:id},
            success: function(result) {
                if(result == "1") {
                    var notify = new Notify("User wurde geändert");
                    notify.showNotification();
                }
                else {
                    select.val(select.data("lastValue"));
                    var notify = new Notify("Es ist ein Fehler aufgetreten");
                    notify.showNotification();
                    return false;
                }
            }
        })


    });

});

function refresh_video() {
    $.ajax({
        url: './update',
        type: 'POST',
        data: {random: 'a' },
        success: function(result) {
            console.log(result);
            result = JSON.parse(result);
            $('#randomTitle')[0].innerHTML = result.title;
            $('#randomDescription')[0].innerHTML = result.description;
            $('#randomViews')[0].innerHTML = result.views;
            $('#randomRating')[0].innerHTML = result.rating ;
            var myPlayer = videojs('my-randomvideo');
            myPlayer.src(result.links[1].uri);
            myPlayer.play();
        }
    })
}


