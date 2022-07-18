<?php
// JSONでGETする
header('Content-Type: application/json; charset=UTF-8');

// パラメータチェック
if(isset($_GET["num"]) && !preg_match('/[^0-9]/', $_GET["num"])) {
    $param = htmlspecialchars($_GET["num"]);
    // メイン処理
    $arr["status"] = "OK";
    $arr["num"] = (string)((int)$param * 3); // num
    $arr["num_x_num"] = (string)((int)$param * (int)$param); // num * num
    $arr["num_x_num_x_num"] = (string)((int)$param * (int)$param * (int)$param); // num * num

} else {
    // paramの値が不適ならstatusをnoにしてプログラム終了
    $arr["status"] = "NG";
}

// 配列をjson形式にデコードして出力, 第二引数は、整形するためのオプション
print json_encode($arr, JSON_PRETTY_PRINT);