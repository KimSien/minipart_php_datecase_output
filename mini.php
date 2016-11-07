<?php
namespace changingdisplay;
date_default_timezone_set('Asia/Tokyo');
/**
*
*/
$current = date('Y-m-d H:i:s');
$setting = [
    "2016-11-7 10:00:0"=>"**.jpg",
    "2016-11-14 10:0:0"=>"**.jpg"

];


/**
*
*/
foreach ($setting as $key => $value) {

    /**
    * 期間内かどうかを確かめる
    */
    if (strtotime($current) < strtotime($key)) {
     $image_url = $value;
     break;
    } else {
    //echo " out";   
    }

}

echo <<< EOM

<img src="{$image_url}" >

EOM;
