<?php

/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 03.05.16
 * Time: 11:04
 */
class RestAPI {
    static $apiUrl = "http://ketos.informatik.uni-tuebingen.de/vsd2k15/v1";

    /**
     * Start get request with $ressource path
     * @param $ressource target-path
     * @return mixed
     */
    public static function get($ressource) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => RestAPI::$apiUrl.$ressource,
            CURLOPT_USERAGENT => 'Programmierprojekt',
            CURLOPT_HTTPHEADER  => array('Authorization: '.User::getUser()->getAuth())
        ));

        // Send the request & save response to $resp
        $resp = curl_exec($curl);

        // Close request to clear up some resources
        curl_close($curl);

        return $resp;
    }

    /**
     * Start post request with $ressource path and $body content
     * @param $ressource target-path
     * @param $body post body in array format
     * @return json
     */
    public static function post($ressource, $body = array())
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => RestAPI::$apiUrl.$ressource,
            CURLOPT_USERAGENT => 'Programmierprojekt',
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER  => array('Authorization: '.User::getUser()->getAuth()),
            CURLOPT_POSTFIELDS => json_encode($body)

        ));

        // Send the request & save response to $resp
        $resp = curl_exec($curl);

        // Close request to clear up some resources
        curl_close($curl);

        return $resp;
    }

    /**
     * Start patch request with $ressource path and $body content
     * @param $ressource
     * @param $body needs to be an array of json objects
     * @return json
     */
    public static function patch($ressource, $body = array())
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(

            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => RestAPI::$apiUrl . $ressource,
            CURLOPT_USERAGENT => 'Programmierprojekt',
            CURLOPT_CUSTOMREQUEST => "PATCH",
            CURLOPT_HTTPHEADER => array("Content-Type: application/json-patch+json", 'Authorization: ' . User::getUser()->getAuth()),
            CURLOPT_POSTFIELDS => json_encode($body)
        ));


        // Send the request & save response to $resp
        $resp = curl_exec($curl);

        // Close request to clear up some resources
        curl_close($curl);

        return $resp;
    }

    /**
     * Starts a put request with $ressource path and $body content
     * @param $ressource
     * @param $body
     * @return mixed
     */
    public static function put($ressource, $body = array())
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(

            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => RestAPI::$apiUrl . $ressource,
            CURLOPT_USERAGENT => 'Programmierprojekt',
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_HTTPHEADER => array('Authorization: ' . User::getUser()->getAuth()),
            CURLOPT_POSTFIELDS => json_encode($body)
        ));


        // Send the request & save response to $resp
        $resp = curl_exec($curl);

        // Close request to clear up some resources
        curl_close($curl);


        return $resp;
    }


    /**
     * Put with Empty $body
     */

    public static function putEmpty($ressource)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(

            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => RestAPI::$apiUrl . $ressource,
            CURLOPT_USERAGENT => 'Programmierprojekt',
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_HTTPHEADER => array('Authorization: ' . User::getUser()->getAuth()),

        ));


        // Send the request & save response to $resp
        $resp = curl_exec($curl);

        // Close request to clear up some resources
        curl_close($curl);


        return $resp;
    }

    /**
     * Start delete request with $ressource as target-path
     * @param $ressource target-path
     * @return mixed
     */
    public static function delete($ressource,$body = array()) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => RestAPI::$apiUrl.$ressource,
            CURLOPT_USERAGENT => 'Programmierprojekt',
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER  => array('Authorization: '.User::getUser()->getAuth()),
            CURLOPT_POSTFIELDS => json_encode($body)
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return $resp;
    }

    /**
     * Empty-Delete
     */
    public static function deleteEmpty($ressource)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => RestAPI::$apiUrl . $ressource,
            CURLOPT_USERAGENT => 'Programmierprojekt',
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => array('Authorization: ' . User::getUser()->getAuth()),

        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return $resp;
    }



    /**
     * Start delete request with $ressource as target-path
     * @param $ressource target-path
     * @return mixed
     */
    public static function emptyDelete($ressource) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => RestAPI::$apiUrl.$ressource,
            CURLOPT_USERAGENT => 'Programmierprojekt',
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER  => array('Authorization: '.User::getUser()->getAuth())
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return $resp;
    }

    public static function formUpload($path,$name,$mime,$description) {
        $curl = curl_init();
        $video = new CURLFile($path,$mime,$name);
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => RestAPI::$apiUrl.'/videos',
            CURLOPT_USERAGENT => 'Programmierprojekt',
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER  => array('Content-Type: multipart/form-data','Authorization: '.User::getUser()->getAuth()),
            CURLOPT_POSTFIELDS => array("title" => $name, "description" => $description, "file" => $video)
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return $resp;
    }
}
?>