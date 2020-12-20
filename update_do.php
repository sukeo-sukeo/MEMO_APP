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
  
  $statment = $db -> prepare('UPDATE memos SET memo=? WHERE id=?');
  $statment -> execute([$_POST['memo'], $_POST['id']]);
  ?>
  <p>メモの内容を変更しました</p>
</pre>
<p><a href="index.php">トップへ戻る</a></p>
</main>
</body>    
</html>