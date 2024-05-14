<!DOCTYPE html>
  <html lang="ja">
 
    <head>
      <meta charset="UTF-8">
      <title>PHP基礎編</title>
    </head>
 
    <body>
      <p>
        <?php
        function sort_2way($array, $order) {
          // 引数$orderがTRUE（昇順）ならば「昇順にソートします」とメッセージを表示し引数$arrayを昇順にソートし1行ずつ表示する
          if ($order) {
            echo '昇順にソートします。';
            echo '<br>';
            sort($array);
            foreach($array as $value) {
              echo "{$value}<br>";
            } 
          // 引数$orderがFALSE（降順）ならば「降順にソートします」とメッセージを表示し引数$arrayを昇順にソートし1行ずつ表示する
          } else {
            echo '降順にします。';
            echo '<br>';
            rsort($array);
            foreach($array as $value) {
            echo "{$value}<br>";
            }
          }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順にソートする
        sort_2way($nums, TRUE);
        // 降順にソートする
        sort_2way($nums, FALSE);
        ?>
      </p>
    </body>
 
  </html>