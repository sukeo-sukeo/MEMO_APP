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
<pre>
  <?php
  require('dbconnect.php');

  if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    
    $statment = $db -> prepare('DELETE FROM memos WHERE id=?');
    $statment -> execute([$id]);
  }
  ?>
  <p>メモを削除しました</p>
</pre>
<p><a href="index.php">トップへ戻る</a></p>
</main>
</body>    
</html>