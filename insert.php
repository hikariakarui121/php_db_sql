<?php

// 値がセットされていなければ、空っぽなら、処理を終わりにsましょうというおまじない※これがないとエラーがでてくる
if(
  !isset($_POST["name"]) || $_POST["name"] ==""||
  !isset($_POST["title"]) || $_POST["title"] ==""||
  !isset($_POST["naiyou"]) || $_POST["naiyou"] =="" 
){
  exit('paramError');
}

//  1 POSTデータ取得(エラー処理追加）

$name = $_POST["name"];
$title = $_POST["title"];
$naiyou= $_POST["naiyou"];

// DBに接続します（エラー処理追加）
// 書きは毎回コピーして使えばいい
// TRYはエラーを探すための処理らしい
try {
  $pdo = new PDO('mysql:dbname=login_kadai;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


// データ登録（SQL文を書く）
// 直接データを入れない（文字問題）
$sql ="INSERT INTO login_table(id, name, title, naiyou, indate)VALUES(NULL,:a1, :a2, :a3, sysdate())";

$stmt =$pdo->prepare($sql);

// ここでは文字を切り替える安全に！
// PDO::PARAM_STRは文字列、数値の場合はINT

$stmt->bindValue(':a1',$name, PDO::PARAM_STR);
$stmt->bindValue(':a2',$title, PDO::PARAM_STR);
$stmt->bindValue(':a3',$naiyou, PDO::PARAM_STR);

// エグゼキュートで実行する
// $statusに全てのデータが格納される
$status =$stmt->execute();


// データ登録後の処理
if ($status==false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
} else {
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: kadai.php");
  exit;
}
?>