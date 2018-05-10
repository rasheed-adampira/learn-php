<?php include 'functions.php' ?>
<?php $users = get_users(); ?>
<! doctype html>
<html>
  <head>
    <title>php learning</title>
    <style>
        table, tr, th, td{border: 1px solid #eee;padding: 5px;}
    </style>
  </head>
  <body>
    <center>
      <?php for($i = 0; $i <= 10; $i++): ?>
        <!-- <p><?php echo $i; ?></p> -->
      <?php endfor; ?>
      <table>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>email</th>
          <th>action</th>
        </tr>
      <?php foreach($users as $user): ?>
          <tr>
              <td><?php echo $user['id']; ?></td>
              <td><?php echo $user['name']; ?></td>
              <td><?php echo $user['email']; ?></td>
              <td>delete | edit</td>
          </tr>
      <?php endforeach; ?>
      </table>
    </center>
  </body>
  </html>
