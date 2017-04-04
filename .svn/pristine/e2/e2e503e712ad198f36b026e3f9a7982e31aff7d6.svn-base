<?php
/**
 * Created by PhpStorm.
 * User: Finn
 * Date: 04.06.16
 * Time: 18:10
 */
header("Content-Type: application/json");
if(isset($_POST['query'])) {
        $ret = User::getAllUsers(0,1000);
        if($ret != null) {
            $results = array();
            foreach ($ret->{'items'} as $result){
                array_push($results, array('name' =>$result->username, 'id' => $result->id));
            }
            $results = searchname($results,$_POST['query']);
            echo json_encode(array('results' => $results));
        }
        else {
            echo '0';
       }
}
function searchname($array, $name){
    $res = array();
    foreach ($array as $entry){
        if(stristr($entry['name'],$name) !== FALSE){
            array_push($res,$entry);
        }
    }
    return $res;
}