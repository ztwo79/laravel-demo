<?php
/**
 * Created by PhpStorm.
 * User: ztwo79
 * Date: 9/3/15
 * Time: 11:03 PM
 */
$obj = new stdClass();
// $obj->post = $postArr;
$obj->user = $users;
echo json_encode($obj);