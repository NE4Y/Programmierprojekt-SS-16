<?php
/**
 * Created by PhpStorm.
 * User: Finn
 * Date: 04.06.16
 * Time: 18:10
 */
header("Content-Type: application/json");

if(isset($_POST['query'])) {
    $type = $_POST['type'];
    if($type == 'Playlist' || $type == 'Kategorien'){
        $ret = $type == "Playlist" ? Playlist::searchPlaylistByName($_POST['query'])
        : Category::searchCategoriesbyName($_POST['query']);
        if($ret != null) {
            $results = array();
            foreach ($ret->items as $result){
                array_push($results, array('name' => $result->name,
                    'id' => $type == 'Playlist' ? 'playlist' : 'category'));
            }
            echo json_encode(array('results' => $results));
        }
        else {
            echo '0';
        }
    }
    else if ($type == 'Videos'){
        $ret = Video::searchVideoByName($_POST['query']);
        if($ret != null) {
            $results = array();
            foreach ($ret->items as $result){
                array_push($results, array('name' => $result->title, 'id' => 'video'));
            }
            echo json_encode(array('results' => $results));
        }
        else {
            echo '0';
        }
    }
    else{
        $retV = Video::searchVideoByName($_POST['query']);
        $retC = Category::searchCategoriesbyName($_POST['query']);
        $retP = Playlist::searchPlaylistByName($_POST['query']);
        if($retV != null) {
            $resultsV = array();
            $resultsC = array();
            $resultsP = array();
            foreach ($retV->items as $result){
                array_push($resultsV, array('name' => $result->title, 'id' => 'video'));
            }
            foreach ($retC->items as $result){
                array_push($resultsC, array('name' => $result->name, 'id' => 'category'));
            }
            foreach ($retP->items as $result){
                array_push($resultsP, array('name' => $result->name, 'id' => 'playlist'));
            }
            echo json_encode(array(
                'resultsV' => array_slice($resultsV,0,3),
                'resultsC' => array_slice($resultsC,0,3),
                'resultsP' => array_slice($resultsP,0,3)));
        }


        else {
            echo '0';
        }
    }

}