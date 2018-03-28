<HTML>
<body background="./bg.jpg" text=#FFFFFF><div>
<?php
$name=$_POST['name'];

$link = mysqli_connect("localhost", "id5213884_root", "ABCD1234", "id5213884_gecskp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM gecskp WHERE name='$name'" ;
if($result = mysqli_query($link, $sql))
{
echo"<table border=2>";
echo"<tr>";
echo"<td>id</td>";
echo"<td>name</td>";

echo"<td>branch</td>";
echo"<td>semester</td>";


echo "</tr>";
	
	if(mysqli_num_rows($result)>0)
		{
			
			
	
		while($row=mysqli_fetch_assoc($result)){
		
		
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			
			
			
			echo "<td>".$row['branch']."</td>";
		echo "<td>".$row['semester']."</td>";}
			
			}
		}

?>
</div>

</body>
</html>
