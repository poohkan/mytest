<?php
//echo gethostname();
$gender = "all";
$run_result[] = NULL;
$pre = $_SERVER["REQUEST_URI"];
//print $pre;
if($_GET["gender"])
{
  $gender = $_GET["gender"];
} else { $gender = "all"; }


if(gethostname()!= "debian")
{
$servername = "plearnjai.com";
$username = "plearnja_cpsu10";
$password = "mRHndxeVd";
$dbname = "plearnja_cpsu10";
}
else
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB";
}
    
    	$conn = mysqli_connect($servername,$username,$password,$dbname);
		mysqli_set_charset($conn, "utf8");
		
		
		$sql = "SELECT * FROM userprofile";
		if($gender != "all") { $sql .= " where gender = '$gender' "; }
		//print $sql;
		$result = mysqli_query($conn, $sql);
		$objResult = mysqli_fetch_all($result,MYSQLI_ASSOC);
  		$json = json_encode($objResult);	
		print $json;
?>