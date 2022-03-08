<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>과제 a번</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
<h1> A번 Result </h1>
 매물번호/ 매물이름/ 매물종류/ 가격종류/ 등록일/ 가격
<?php 
$db=mysqli_connect("localhost","root","1226"); // a번 상주시의 매매, 가격범위 조건, 매물번호 매물이름 출력 
mysqli_select_db($db,"mydb");

$sql_result=mysqli_query($db,"select *  from forsale where forsale_kind='주택' and price_kind='매매' and price between 100000000 and 200000000 ");

echo "<table border=1>"; 
while($sql_array=mysqli_fetch_array($sql_result)){
	echo "<tr>";
	echo "<td>".$sql_array[0]." </td>";
	echo "<td>".$sql_array[1]." </td>";
	echo "<td>".$sql_array[2]." </td>";
	echo "<td>".$sql_array[3]." </td>";
	echo "<td>".$sql_array[4]." </td>";
	echo "<td>".$sql_array[5]." </td>";
	echo "</tr>";
}
echo"</table>";
?>
</td>