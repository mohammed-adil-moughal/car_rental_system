<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>View Records</title>
</head>
<body>

<?php
/* 
	VIEW.PHP
	Displays all data from 'players' table
*/

	// connect to the database
	//include('connect-db.php');
$link=  mysqli_connect("localhost", "root", "", "records");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

	// get results from database
	//$result = mysql_query("SELECT * FROM players"); 
        $sql1="SELECT * FROM players";
        $result=$link->query($sql1);
		
	// display data in table
	echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>";

	// loop through results of database query, displaying them in the table
	for($i=0;$i=$result->fetch_assoc();$i++) {
		for($j=0;$j<1;$j++){
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $i['id'] . '</td>';
		echo '<td>' . $i['firstname'] . '</td>';
		echo '<td>' . $i['lastname'] . '</td>';
		echo '<td><a href="edit.php?id=' . $i['id'] . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . $i['id'] . '">Delete</a></td>';
                echo "</tr>"; }
	} 

	// close table>
	echo "</table>";
?>
<p><a href="new.php">Add a new record</a></p>

</body>
</html>	