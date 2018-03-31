<?php
require 'db.php' ;
$sql1 = "select * from smv36.accounts";

$results0=runQuery($sql1);
if(count($results0) > 0)
{
	echo "<table border=\"3
	\"><tr><th>ID</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Birthday</th><th>Gender</th><th>Pass</th></tr>";
	foreach ($results0 as $row) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["phone"]."</td><td>".$row["birthday"]."</td><td>".$row["gender"]."</td><td>".$row["password"]."</td></tr>";
	}
	
}

else{
    echo '0 results';
}
 include('test_db.php');
?>