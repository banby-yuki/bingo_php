<?php

require_once (__DIR__ . '/config.php');
require_once (__DIR__ . '/bingo2.php');

$bingo2 = new \Myapp\bingo2();
$nums = $bingo2->create();



 ?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>BINGO</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="container">
      <table>
        <tr>
          <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
        </tr>
        <?php for ($i=0; $i < 5; $i++) : ?>
        <tr>
          <?php for ($j=0; $j < 5; $j++) : ?>
          <td><?php echo h($nums[$j][$i]) ?></td>
          <?php endfor; ?>
        </tr>
        <?php endfor; ?>
      </table>
    </div>
  </body>
</html>
