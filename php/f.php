<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>과제 f번</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
<h1> F번 Result </h1>
판매가격/ 판매자이름/ 중개인이름/ 판매 등록 날짜 
<?php 
$db=mysqli_connect("localhost","root","1226"); 
mysqli_select_db($db,"mydb");

$sql_result=mysqli_query($db,"select price, seller_name, real_estate_name,forsale_date
from forsale
where num not in (select forsale_info_forsale_num from tran);");

echo "<table border=1>"; 
while($sql_array=mysqli_fetch_array($sql_result)){
	echo "<tr>";
	echo "<td>".$sql_array[0]." </td>";
	echo "<td>".$sql_array[1]." </td>";
	echo "<td>".$sql_array[2]." </td>";
	echo "<td>".$sql_array[3]." </td>";
	echo "</tr>";
}
echo"</table>";
?>
</td>