<!-- セレクトされた時に -->


<?php

$id = $_GET["id"];

try {
  $pdo = new PDO('mysql:dbname=login_kadai;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

// SELECT文を作る
$sql = "SELECT * FROM login_table WHERE id = :id";
$stmt =$pdo->prepare($sql);
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status =$stmt ->execute();

// データ表示
$view='';
if ($status==false) {
  $error = $stmt->errorInfo();
  exit("SQLエラー:".$error[2]);
} else {
  $row =$stmt->fetch();
  }
?>

<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>クチコミ内容詳細</legend>
     <label>日付：<?=$row["indate"]?></label><br>
     <label>ニックネーム：<?=$row["name"]?></label><br>
     <label>タイトル：<?=$row["title"]?></label><br>
     <label><?=$row["naiyou"]?></textArea></label><br>
    </fieldset>
  </div>
</form>
    
  
</body>
</html>