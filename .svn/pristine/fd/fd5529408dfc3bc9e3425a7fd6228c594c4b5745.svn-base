<?php
/**
 * Created by PhpStorm.
 * User: Finn
 * Date: 01.06.16
 * Time: 16:38
 */

/**
 * Functions
 */

function assignVideoSearch($str)
{

    $ret = Video::searchVideoByName($str);
    if (isset($ret)) {
        if (isset($ret->error)) {
            Notify::addNotify($ret->error->message);
        } else {

            Controller::$smarty->assign('vidtotal', $ret->total);
            Controller::$smarty->assign('videos', $ret->items);

        }
    } else {
        Controller::$smarty->assign('vidtotal', 0);
        Controller::$smarty->assign('videos', null);
    }
}


function assignCategorieSearch($str)
{
    $ret = Category::searchCategoriesbyName($str);
    if (isset($ret)) {
        if (isset($ret->error)) {
            Notify::addNotify($ret->error->message);
        } else {
            Controller::$smarty->assign('cattotal', $ret->total);
            Controller::$smarty->assign('categories', $ret->items);
        }
    } else {
        Controller::$smarty->assign('cattotal', 0);
        Controller::$smarty->assign('categories', null);
    }
}

function assignPlaylistSearch($str)
{
    $ret = Playlist::searchPlaylistByName($str);
    if (isset($ret)) {
        if (isset($ret->error)) {
            Notify::addNotify($ret->error->message);

        } else {
            Controller::$smarty->assign('playtotal', $ret->total);
            Controller::$smarty->assign('playlist', $ret->items);
        }
    } else {
        Controller::$smarty->assign('playtotal', 0);
        Controller::$smarty->assign('playlist', null);
    }
}


/**
 * Modifications to the search-query to delete whitespaces/replace them with underscore
 */

if (isset($_GET['q'])) {
    $_GET['q'] = str_replace(" ", "_", trim($_GET['q']));
}


if (isset($_GET['type']) && isset($_GET['q'])) {

    /**
     * Faster way to search for specific things
     * "v:bla" searches for videos that contain "bla"
     * "c:" for categories, "p:" for playlists
     */

    if ((substr($_GET['q'], 0, 2) === "v:") || (substr($_GET['q'], 0, 2) === "V:")) {
        //search for video
        Controller::$smarty->assign('searchvideos', TRUE);
        $str = substr($_GET['q'], 2);
        assignVideoSearch($str);
        $_GET['type'] = null;

    }
    if ((substr($_GET['q'], 0, 2) === "c:") || (substr($_GET['q'], 0, 2) === "C:") ||
        (substr($_GET['q'], 0, 2) === "k:") || (substr($_GET['q'], 0, 2) === "K:")
    ) {
        //search for category
        Controller::$smarty->assign('searchcategories', true);
        $str = substr($_GET['q'], 2);
        assignCategorieSearch($str);
        $_GET['type'] = null;


    }
    if ((substr($_GET['q'], 0, 2) === "p:") || (substr($_GET['q'], 0, 2) === "P:")) {
        //search for playlist
        Controller::$smarty->assign('searchplaylists', true);
        $str = substr($_GET['q'], 2);
        assignPlaylistSearch($str);
        $_GET['type'] = null;

    }

    /**
     * Check if search is specified
     */
    if ($_GET['type'] === "Videos") {
        Controller::$smarty->assign('searchvideos', TRUE);
        assignVideoSearch($_GET['q']);
    }

    if ($_GET['type'] == "Kategorien") {
        Controller::$smarty->assign('searchcategories', true);
        assignCategorieSearch($_GET['q']);
    }

    if ($_GET['type'] == "Playlist") {
        Controller::$smarty->assign('searchplaylists', true);
        assignPlaylistSearch($_GET['q']);

    } else if ($_GET['type'] == "Alle") {
        Controller::$smarty->assign('searchAll', true);
        assignVideoSearch($_GET['q']);
        assignCategorieSearch($_GET['q']);
        assignPlaylistSearch($_GET['q']);
    }
} else {
    Controller::redirect('/404');

}

/**
 * Add Videos to Playlist
 */
if(isset($_GET['pid'])){
    Controller::$smarty->assign("pid", true);

    $pid = $_GET['pid'];
    Controller::$smarty->assign("pid", $pid);
}