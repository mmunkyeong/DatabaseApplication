<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Insert Real_Estate</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <?php	
      $name = $_POST[ 'name' ];
      $title = $_POST[ 'title' ];

        $db=mysqli_connect("localhost","root","1226"); 
         mysqli_select_db($db,"mydb");

        $sql_result =mysqli_query($db, "INSERT INTO real_estate (name,title ) VALUES (  '$name', '$title' );");
        echo '<h1>Success!</h1>';
    ?>
  </body>
</html>