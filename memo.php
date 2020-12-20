<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../php/css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>

<?php
require('dbconnect.php');

// 数字じゃない場合と０以下の場合は弾く
// 想定外を予測しdbに投げる前に安全性を担保させる
$id = $_REQUEST['id'];
if (!is_numeric($id) || $id <= 0) {
  echo 'idは1以上の数字で指定してください';
  exit();
}

$memos = $db -> prepare('SELECT * FROM memos WHERE id=?');
//memosにエグゼキュートで取得されたレコードから１件fetchをしてそれをmemoにいれて表示する
$memos -> execute([$id]);
$memo = $memos -> fetch();
?>

<article>
  <pre>
    <?php echo $memo['memo']; ?>
  </pre>
  <a href="update.php?id=<?php echo $memo['id']; ?>">編集する</a>
  |
  <a href="delete.php?id=<?php echo $memo['id']; ?>">削除する</a>
  |
  <a href="index.php">戻る</a>
</article>

</main>
</body>    
</html>