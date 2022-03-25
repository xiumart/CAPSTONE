<?php
$conn =new mysqli('localhost', 'root', '' , 'database_script');

$query = '';
$sqlScript = $_FILES["file"];
foreach ($sqlScript as $line)	{
	
	$startWith = substr(trim($line), 0 ,2);
	$endWith = substr(trim($line), -1 ,1);
	
	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
		continue;
	}
		
	$query = $query . $line;
	if ($endWith == ';') {
		mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
		$query= '';		
	}
}
echo '<script language="javascript">';
	echo 'alert("Data added into the database");';
	
	echo '</script>';
?>