<?php include "functions.php" ?>
<! doctype html>
<html>
  <head>
    <title>php learning</title>
  </head>
  <body>
    <center>
      <?php $users = get_users(); ?>
      <?php foreach ($users as $user) : $template = "Hello dear #name# i know your email. this is your email {email}"; ?>
        <p><?php echo $template = str_replace(array('#name#', '{email}'),array($user['name'], $user['email']),
         $template); ?></p>
      <?php endforeach; ?>
    </center>
  </body>
</html>
