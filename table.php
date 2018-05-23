<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
$name="inba";
$branch="information technology";
$year="final year";
$specialization="singing";
echo "<table border='2'>
	<tr>
		<th colspan='2'>personal details</th>
	</tr>
	<tr>
	   <td><h1 style='color:red'>name</h1></td>
		<td><h1 style='color:red'>$name</h1></td>
	</tr>
	<tr>
	    <td><h1 style='color:blue'>branch</h1></td>
		<td><h1 style='color:blue'>$branch</h1></td>
	</tr>
	<tr>
	    <td><h1 style='color:green'>year</h1></td>
		<td><h1 style='color:green'>$year</h1></td>
	</tr>
	<tr>
	    <td><h1 style='color:black'>specialization</h1></td>
		<td><h1 style='color:black'>$specialization</h1></td>
	</tr>
<table>";
?>
</body>
</html>
