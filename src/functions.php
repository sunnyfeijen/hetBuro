<?php
session_start();

SessionCheck();

/* 
Switch
*/	
if (isset($_POST['postdata']))
{
	switch($_POST['postdata'])
	{
		case "uploaden" :
			Connect();
			upload();
			Disconnect();
			break;	
		case "uitloggen" :
			uitloggen();
			break;				
	}
}
else
{
	
}



function upload(){
$klas = mysqli_real_escape_string($GLOBALS['connection'],$_POST['klas']);	
$name = $_SESSION['name'];
$email = $_SESSION['email'];
	
$query = "INSERT INTO buro (klas, naam, email) VALUES ('$klas', '$name', '$email')";
mysqli_query($GLOBALS['connection'], $query) or die ("verbinden mislukt". mysqli_error($GLOBALS['connection']));	
}

function uitloggen(){
	session_destroy();
	session_start();
}

function Connect()
{
	$GLOBALS['connection'] = mysqli_connect("localhost", "i274003_i274003", "jumpinggiants", "i274003_buro")
		or die ("verbinden mislukt". mysqli_connect_error());
}
function Disconnect()
{
	@mysqli_close($GLOBALS['connection']);	
}

function SessionCheck()
{
	if(!isset($_SESSION['ingelogd']))
	{
		uitloggen();
		$_SESSION['ingelogd'] = 'false';
		
	}
}



?>