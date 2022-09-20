<?php
declare(strict_types=1);

$candidate = array('グー', 'チョキ', 'パー');

if (isset($_POST['janken'])) {
  // $_POSTに入った値を$userHandとする。
  $userHand = $_POST['janken'];

  // $candidateからランダムに抽出した値を$computerHandとする。
  $key = array_rand($candidate);
  $computerHand = $candidate[$key];
}

// switch文で勝敗判定の処理を書く

$result = '';

switch ($userHand) {
  // あいこの場合
  case ($userHand === $computerHand):
    $result = 'あいこ';
    break;
  // グーの場合
  case 'グー':
    $result = ($computerHand === 'チョキ') ? '勝ち' : '負け';
    break;
  // チョキの場合
  case 'チョキ':
    $result = ($computerHand === 'パー') ? '勝ち' : '負け';
    break;
  // パーの場合
  case 'パー':
    $result = ($computerHand === 'グー') ? '勝ち' : '負け';
    break;
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>じゃんけんゲーム</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="janken_pa.png">
</head>
<body>
  <header class="text-center"><a href="./index.php" class="page-title"><h1>じゃんけんゲーム</h1></a></header>
  <main class="container">
    <p class="before-result">結果は…</p>
    <p class="game-result"><?=$result?><!--ゲーム結果の変数が入ります--></p>
    <p class="choice-result">あなた : <?=$userHand?> <!--ユーザの選択した値が入ります--></p>
    <p class="choice-result">コンピューター : <?=$computerHand?><!--コンピューターが出力した値が入ります--></p>
    <a href="./index.php" class="retry-button">>>もう一回勝負する</a>
  </main>
  <footer><p class="footer-text"><small>&copy; 2022 matcha528</small></p></footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>