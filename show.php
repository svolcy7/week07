<?php
require 'db.php' ;
$sql = "select id,email,fname,lname,password from smv36.accounts  ";

$results=runQuery($sql);
if(count($results) > 0)
{
	echo "<table border=\"3
	\"><tr><th>ID</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Birthday</th><th>Pass</th></tr>";
	foreach ($results as $row) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["phone"]."</td><td>".$row["birthday"]."</td><td>".$row["password"]."</td></tr>";
	}
	
}

else{
    echo '0 results';
}
?>