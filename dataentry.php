<?php
$name=$_POST['name'];
$job=$_POST['job'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$mailid=$_POST['mailid'];
$mobile=$_POST['mobile'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$address=$_POST['address'];
$link = mysqli_connect("localhost", "root", "", "gecskp");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO gecskp(name,job,gender,dob,mailid,mobile,branch,semester,address) VALUES ('$name','$job','$gender','$dob','$mailid','$mobile','$branch','$semester','$address')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>