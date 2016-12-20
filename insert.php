<?php
error_reporting (E_ALL ^ E_NOTICE);



$con = mysqli_connect("localhost", "root", "mohara","web-ajax-upload");

echo $title = $_FILES['title']['name'];
echo "<br>";
echo $name = $_POST['name'];

$name = mysqli_real_escape_string($con,$_POST['name']);
$file_name = mysqli_real_escape_string($con,$_FILES['title']['name']);



$query = "insert into upload(name,file_name) values('$name','$file_name')";


if(mysqli_query($con, $query)){
    
    echo "Complete";
} else {
    echo "error";
}

?>