<?php

include("connect.php");

session_start();


function makeDirectory($new_path, $mode)
{
	
	if(isset ($_POST['submit']))
	{ 	if (!file_exists($new_path))
		{
	        mkdir($new_path,$mode, true);
			$Create = $_POST['Create'];
			echo $Create;
	
			$sql = "INSERT INTO folder('folder_name')VALUES('$Create')";
	
			$result = mysqli_query();

			if($result){
		
				header("Location: welcome.php");
		
			}
			else
			{
				echo" error"; 
			}
		}
	}
}
$new_path = 'fileshare/directory';
$mode = 0777;

makeDirectory($new_path, $mode);

?>