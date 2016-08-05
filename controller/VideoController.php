<?php
require_once("classes/Video.php");

Class VideoController {

    function show($params) {
        $id = $params[0];
        $video = new Video($id);
        //$video = Video::withID($id);
        include_once("videodetails.php");
    }

    function results() {
        include_once("videoresults.php");
    }

    function tag($params) {
        $searchtag = $params[0];
        include_once("imageresults.php");
    }

    function edit($params) {
        $id = $params[0];
        $video = new Video($id);
        include_once("videoupdate.php");
    }

    // function delete($params) {
    //     $id = $params[0];
    //     $video = new Video($id);
    //     include_once("videodelete.php");
    // }

}

?>
