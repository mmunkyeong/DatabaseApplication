<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Add Real_Estate </title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <h1>Add Real_Estate</h1>
    에이전트 추가_ 
    <form action="ginsert.php" method="POST">
      <p><input type="text" name="name" placeholder="이름" required></p>
      <p><input type="text" name="title" placeholder="부동산명" required></p>
    
      <button>ADD</button>
    </form>
  </body>
</html>