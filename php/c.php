<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>과제 c번</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
<h1> C번 Result </h1> 
이름/ 부동산명 
<?php 
$db=mysqli_connect("localhost","root","1226"); 
mysqli_select_db($db,"mydb");

$sql_result=mysqli_query($db,"select distinct name, title from tran_info natural join real_estate where id=(select real_estate_id
from tran_info 
where tran_date like '%2021%'
group by real_estate_id
having count(real_estate_id) > 1  order by count(real_estate_id) DESC limit 1);");

echo "<table border=1>"; 
while($sql_array=mysqli_fetch_array($sql_result)){
	echo "<tr>";
	echo "<td>".$sql_array[0]." </td>";
	echo "<td>".$sql_array[1]." </td>";
	echo "</tr>";
}
echo"</table>";
?>
</td>