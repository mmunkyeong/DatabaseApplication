<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>과제 b번</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
<h1> B번 Result </h1>
시/동/ 매물이름
<?php 
$db=mysqli_connect("localhost","root","1226"); // a번 상주시의 매매, 가격범위 조건, 매물번호 매물이름 출력 
mysqli_select_db($db,"mydb");

$sql_result=mysqli_query($db," select si, dong, forsale_name from forsale_info where room>=3 and bath_room=2 and dong='냉림동'");

echo "<table border=1>";
while($sql_array=mysqli_fetch_array($sql_result)){
	echo "<tr>";
	echo "<td>".$sql_array[0]." </td>";
	echo "<td>".$sql_array[1]." </td>";
	echo "<td>".$sql_array[2]." </td>";
	echo "</tr>";
}
echo"</table>";
?>
</td>