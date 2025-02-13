<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="URF-8">
    <title>foreach文を使って連想配列の値とキーを出力しよう</title>
  </head>

  <body>
    <p>
      <?php
      // 変数に代入
      $vegetable = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

      // キーと値を出力
      foreach ($vegetable as $key => $value) {
        echo "{$key} : {$value}<br>";
      }
      ?>
    </p>
  </body>
</html>