<?php include 'getData.php';?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Company website searching tool</title>
</head>
<body>
<header>Company website searching tool</header>
<div id="searchField">
    <form class="search">
        <input class="searchTerm" placeholder="Enter the company's name..." id="tb-filter"/>
    </form>
    <ul id="companies">

    </ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/libs/jquery.csv-0.71.min.js"></script>
<script src="js/displayData.js"></script>
<script src="js/selectDataByInput.js"></script>
</body>
</html>