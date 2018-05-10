<! doctype html>
<html>
  <head>
    <title>php learning</title>
  </head>
  <body style="background: <?php echo $bg; ?>">
    <center>
      <?php
          $a = 0;
          while ($a <= 10) : ?>
            <p><?php echo $a; ?></p>
            <?php $a++; endwhile; ?>
    </center>
  </body>
  </html>
