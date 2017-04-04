<?php
/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 25.06.16
 * Time: 20:36
 */

/* Playlist */
Route::add("/playlistadmin", function() {Controller::dispatch("playlist_admin");});
Route::add("/playlistdetail", function() {Controller::dispatch("playlistdetail");});
Route::add("/sortPlaylist", function() {Controller::dispatch("playlist_sort");});

/* Ajax playlist */
Route::add("/doPlaylistSort", function() {Controller::loadAjaxController("playlist/sortPlaylist");});
?>