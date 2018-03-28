<?php

$link = mysqli_connect("localhost", "root", "", "gec");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "create table gecskp(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name CHAR(30) NOT NULL,
	job char(20) NOT NULL,
	gender CHAR(10) NOT NULL,
	dob DATE,
	mailid VARCHAR(40) NOT NULL,
	mobile VARCHAR(10) NOT NULL,
	branch CHAR(10) NOT NULL,
	semester CHAR(10) NOT NULL,
	address CHAR(20) NOT NULL
    
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
