<?php
    $queryRequest = file_get_contents("php://input");

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

    $queryRequest = mysqli_real_escape_string($conn, trim($queryRequest));
    $sql = "select
            name,
            website
            from companies
            where name like '%" . $queryRequest . "%'
            order by name
            limit 10";
    $result = $conn->query($sql);
    $output = array();

    while(($row = $result->fetch_assoc())) {
        $output[]=$row;
    }

    $conn->close();

    header('Content-Type: application/json');
    $json = json_encode($output);
    exit();