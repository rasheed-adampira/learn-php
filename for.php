<?php include 'functions.php' ?>
<! doctype html>
<html>
  <head>
    <title>php learning</title>
    <style>
        table{border-collapse: collapse;}
        table, tr, th, td{border: 1px solid #eee;padding: 5px;}
    </style>
  </head>
  <body>
    <center>
      <table>
      <?php for($i = 0; $i <= 10; $i++): ?>
        <tr>
          <?php for($j = 0; $j < 5; $j++): ?>
            <?php
                $red = mt_rand(0, 255);
                $green = mt_rand(0, 255);
                $blue = mt_rand(0, 255);
                $opa = mt_rand(1, 9);

                $bg_color = $red.','.$green.','.$blue;

             ?>

              <td style="background: rgba(<?php echo $bg_color.', 0.'.$opa; ?>)">
                rgba(<?php echo $bg_color.', 0.'.$opa;; ?>)</td>
          <?php endfor; ?>
          <tr>
      <?php endfor; ?>
    </table>
    </center>
  </body>
  </html>
