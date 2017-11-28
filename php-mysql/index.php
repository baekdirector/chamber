<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/php-mysql/style.css">
    <title></title>
  </head>
  <body>
  <header>
    <h1><a href="http://localhost/php-mysql/index.php">Javascript</a></h1>
  </header>
  <nav>
    <?php
      $conn = mysqli_connect("localhost", "root", "123456");
      mysqli_select_db($conn, 'opentutorials');
      $result = mysqli_query($conn, 'SELECT * FROM topic');

      while($row = mysqli_fetch_assoc($result)) {
        echo '<li><a href="http://localhost/php-mysql/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
      }
     ?>
  </nav>
  </body>
</html>
