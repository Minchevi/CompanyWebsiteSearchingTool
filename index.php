<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Companies</title>
    <script type="text/javascript">

        function stopRKey(evt) {
            var evt = (evt) ? evt : ((event) ? event : null);
            var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
            if ((evt.keyCode == 13) && (node.type=="text"))  {return false;}
        }

        document.onkeypress = stopRKey;

    </script>
</head>
<body>
<header>Company website searching tool</header>
<div id="searchField">
    <form class="search">
        <input id="searchTerm" type="text" placeholder="Enter the company's name..." id="tb-filter" autocomplete="off"/>
    </form>
    <ul id="companies">

    </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/libs/jquery.csv-0.71.min.js"></script>
<script src="js/submitInput.js"></script>
<script src="js/displayData.js"></script>

</body>
</html>