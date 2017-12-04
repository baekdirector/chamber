<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/php-mysql/style.css">
    <title></title>
  </head>
  <body id="target">
  <header>
    <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
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
  <div id="control">
    <input type="button" name="white" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" name="block" value="block" onclick="document.getElementById('target').className='block'"/>
    <a href="http://localhost/php-sql/write.php">쓰기</a>
  </div>
  <article>
    <form action="process.php" method="post">
      <p>
        제목 : <input type="text" name="title" value="">
      </p>
      <p>
        작성자 : <input type="text" name="author" value="">
      </p>
      <p>
        본문 :  <textarea name="description"></textarea>
      </p>
      <input type="submit" name="제출">
    </form>
  </article>
  </body>
</html>
