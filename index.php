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
    <p class="battle-description">出す手を選んで勝負して下さい。</p>
    <form action="./result.php" method="post">
      <input type="radio" name="janken" value="グー" id="gu" checked>
      <label for="gu">グー</label>
      <input type="radio" name="janken" value="チョキ" id="choki">
      <label for="choki">チョキ</label>
      <input type="radio" name="janken" value="パー" id="pa">
      <label for="pa">パー</label><br>
      <button type="submit" onclick="location.href='./result.php'" class="battle-button">勝負する！</button>
    </form>
  </main>
  <footer><p class="footer-text"><small>&copy; 2022 matcha528</small></p></footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>