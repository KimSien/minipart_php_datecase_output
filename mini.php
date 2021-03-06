<?php
/**
* 変数汚染用にnamespaceで対応
*/
namespace changingdisplay;

/**
*　設定関係
*/
date_default_timezone_set('Asia/Tokyo');
$jsonurl = "settingdata.json"; // json url


/**
* 現在の時間を取得
*/
$current = date('Y-m-d H:i:s');
$json = file_get_contents($jsonurl);

// JSON($json)を連想配列に変換(デコード)する
$setting = json_decode( $json , true ) ;


/**
* 期間内かどうか確かめて出力
*/
foreach ($setting as $value) {
    /**
    * 期間内かどうかを確かめる
    */   
    if (strtotime($current) < strtotime($value["date"])) {
     $image_url = $value["imgurl"];
     $alt = $value["alt"];
     break;
    } else {
        //base setgings
        if(!isset($image_url)){
        $image_url = $setting["base"]["imgurl"];
        $alt=$setting["base"]["alt"];
        }
    }
}

/**
* 出力
*/
echo <<< EOM
<img src="{$image_url}" alt="{$alt}">
EOM;
