<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>과제 e번</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
<h1> E번 Result </h1>

<?php 
$db=mysqli_connect("localhost","root","1226"); 
mysqli_select_db($db,"mydb");

$sql_result=mysqli_query($db,"select img from forsale
where price >=all(select price from forsale);");
   //echo"<img src=$sql_result />";
    echo "<table border=1>";
  while($sql_array=mysqli_fetch_array($sql_result)){
	echo "<tr>";
	// echo "<td>".'<img src= $sql_result width=500/>'." </td>";
 	echo "<td><img src=" .$sql_array[0]. " width=500/> </td>";
	echo "</tr>";
}
   echo"</table>";
?>

</td>
</html>