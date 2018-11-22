<html>
<head>
</head>
<header></header>

<?php
	$db=mysqli_connect('localhost:3306','root','','login');
	if(isset($db))
	{
		$sql="SELECT SUM(cost) as total FROM `cart`";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result);
		$sum=$row['total'];
		echo(total()); 
			};
		//echo $sum;
	}
?>

<script type="text/javascript"> 
		function total(){
			document.getElementById("total").innerHTML='.$sum.'
		}
</script>


<style>
table, th, td {
    border: 1px solid black;
	padding:5px;
}
table {
    border-spacing: 15px;
}
</style>

<body>
	<table style="width:40%; height:50%">
	<tr>
		<th style="width:60%; height:5%">ITEM</th>
		<th>Cost</th>
	</tr>
	<tr>
    <td style="width:60%; height:15%"></td>
    <td></td>
    </tr>
  <tr>
    <td style="width:60%; height:15%"></td>
    <td></td>
  </tr>
  <tr>
    <td style="width:60%; height:15%"></td>
    <td></td>
    </tr>
  <tr>
    <td style="width:60%; height:15%"></td>
    <td></td>
  </tr>
  <tr style="width:60%; height:15%">
	<td align="center">TOTAL<td>
	<td id="total"></td>
  </tr>
	</table>
</body>
</html>	