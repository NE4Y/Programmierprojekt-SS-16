<?php

/**
 * Created by PhpStorm.
 * User: Steffen
 * Date: 03.05.16
 * Time: 11:00
 */
class Category {


    /**
     * @return json
     */
    public function getAllCategories()
    {
        $ret = RestApi::get("/categories");
        return json_decode($ret);
    }

    public function getCategories($offset, $limit = 20) {
        return RestApi::get("/categories?limit=".$limit."&offset=".$offset);
    }

    /**
     * @param $id category id
     * @return json
     */
    public function deleteCategory($id) {
        return RestApi::emptyDelete("/categories/".$id);
    }

    /**
     * Add category by $name
     * @param $name
     * @return json
     */
    public function addCategory($name) {
        return RestAPI::post("/categories", array("name" => $name));
    }

    /**
     * Get category by $id
     * @param $id
     * @return json
     */
    public function getCategoryById($id) {
        return RestAPI::get("/categories/".$id);
    }

    public function renameCat($id, $name) {
        return RestAPI::put("/categories/".$id, array("id" => $id, "name" => $name));
    }
    /**
     * Get videos by categoriy $id
     * @param $id
     * @return json
     */
    public function getVideosByCategory($id) {
        return RestAPI::get("/categories/".$id."/videos");
    }

    public static function searchCategoriesbyName($name)
    {
        $ret = RestAPI::get("/search?type=category&name=" . $name);
        return json_decode($ret);
    }

    public static function addVideoToCategory($vidid, $catid)
    {
        $ret = RestAPI::put("/categories/" . $catid . "/videos", array("vid" => $vidid));
        return json_decode($ret);
    }

    public static function deleteVideoFromCategory($vidid, $catid)
    {
        $ret = RestAPI::delete("/categories/" . $catid . "/videos", array("vid" => $vidid));
        return json_decode($ret);
    }
}
?>