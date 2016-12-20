<?php
error_reporting (E_ALL ^ E_NOTICE);

echo "55555";

$con = mysqli_connect("localhost", "root", "mohara","web-ajax-upload");
$sql = "select * from upload";
	$result = mysqli_query($con,$sql);

	//$row = mysqli_fetch_assoc($result);
	

	while ($row = mysqli_fetch_assoc($result)){

echo "id : ".$row['name']."<br>";
	echo "Name : ".$row['file_name']."<br>";
	}
?>