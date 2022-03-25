<?php 
// creating a connection by passing server name, 
// username, password and database name
// servername=localhost
// username=root
// password=empty
// database name= geeks_database
$connection_link = new mysqli("localhost", "root", "","geeks_database"); 
  
if ($connection_link === false) { 
    die("ERROR: Not connected. ".$connection_link->connect_error); 
} 
  
//sql query to perform copying data from one table to another
$sql_query  =  "insert table2 select * from table1 where "; 
    if ($connection_link->query($sql_query) === true) 
{ 
    echo "Data Copied Successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to proceed $sql_query. "
        .$connection_link->error; 
} 
  
// Close the  connection 
$connection_link->close(); 
?>