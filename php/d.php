<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>과제 d번</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
<h1> D번 Result </h1> 
중개인id/ 평균매매가격/ 평균시간
<?php 
$db=mysqli_connect("localhost","root","1226"); 
mysqli_select_db($db,"mydb");

$sql_result=mysqli_query($db,"select real_estate_id,avg(tran_forsale_info_forsale_price) , AVG(DATEDIFF(tran_info.tran_date,forsale.forsale_date))
from tran_info natural join forsale
where  tran_date like'%2020%'
group by real_estate_id;
");

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