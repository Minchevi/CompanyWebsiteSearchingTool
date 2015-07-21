<?php
$servername = "*";
$username = "*";
$password = "*";
$dbname = "*";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select
        name,
        website
        from companies
        where name like '%a%'
        order by name
        limit 10";
$result = $conn->query($sql);

// output data of each row
$rows=0;
$output = array();
while(($row = $result->fetch_assoc())) {
	$rows++;
	$output[]=$row;
	//echo "<br> company name ". $row["name"]. " - website: ". $row["website"]."<br>";
}
if ($rows === 0){
    echo "0 results";
}
$conn->close();

header('Content-Type: application/json');
echo json_encode($output);
exit();
