<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義
    class Food {
      // プロパティを定義
      private $name;
      private $price;

      // コンストラクトを定義
      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドを定義
      public function show_Price() {
        echo $this->price;
      }
    }

    // クラスを定義
    class Animal {
      // プロパティを定義
      private $name;
      private $height;
      private $weight;

      // コンストラクトを定義
      public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドを定義
      public function show_height() {
        echo $this->height;
      }
    }

    // インスタンス化
    $potato = new Food('potato', 250);
    $dog = new Animal('dog', 60, 5000);

    // インスタンスを出力
    print_r($potato);
    echo '<br>';
    print_r($dog);
    echo '<br>';

    // メソッドにアクセスして実行
    $potato->show_price();
    echo '<br>';
    $dog->show_height();
    ?>
  </p>
</body>

</html>