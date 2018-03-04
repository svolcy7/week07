<?php
require 'db.php' ;
$sql = "select id,email,fname,password from smv36.accounts  ";
$sql2 = "select id,email,fname,password from smv36.accounts where id<6";
$results2=runQuery($sql2);

if(count($results2) > 0)
{
	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th><th>First Name</th><th>Pass</th></tr>";
	foreach ($results2 as $row) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["password"]."</td></tr>";
	}
	
}else{
    echo '0 results2';
}
?>