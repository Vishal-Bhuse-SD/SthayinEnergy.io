<?php 
// include ('conn.php');
$server_name="localhost";
$username="root";
$password="";
$database_name="sthayin";

$con=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$con)
{
	die("Connection Failed:" . mysqli_connect_error());

};

if(isset($_POST['btnSubmit']))
{	
	$mname = $_POST['mname'];
    $memail = $_POST['memail'];
    $mphone = $_POST['mphone'];
    $mmsg = $_POST['mmsg'];
   


	 $sql_query = "INSERT INTO data (mname,memail,mphone,mmsg)
	 VALUES ('$mname','$memail','$mphone','$mmsg')";

	 if (mysqli_query($con, $sql_query)) 
	 {
		header("Location:index.php");
	 } 
	 else
     {
		echo "Error: " .$sql_query . "" . mysqli_error($con);
	 }
	 mysqli_close($con);
}


?>