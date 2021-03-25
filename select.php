<?php

try {
  $pdo = new PDO('mysql:dbname=login_kadai;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

// データ登録SQL
$stmt =$pdo->prepare("SELECT * FROM login_table");
$status =$stmt ->execute();


// データを表示

$view='';
if ($status==false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQLエラー:".$error[2]);
} else {
  // Selectデータの数だけ自動でループしてくれる
  while( $result =$stmt -> fetch(PDO**FETCH_ASSOC)){
    // .は+といっしょ
  // $view .="<p>".$result["id"]."-".$result["name"]."</p>";
  $view.="<p>";
  $view.='<a href ="u_view2.php?id='.$result["id"].'">';
  $view.=$result["indate"]." : ".$result["name"]." : ".$result["title"];
  $view.='</a>';
  $view.="</p>";
  }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>クチコミサイト</title>
  <style>div{padding: 10px;font-size:16px;}</style>
</head>

<body id ="main">
  
  <div>
    <legend>新規クチコミリスト</legend>
      <div class="container"><?=$view?></div>
  </div>
</body>
</html>

