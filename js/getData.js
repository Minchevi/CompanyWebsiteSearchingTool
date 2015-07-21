<script type="text/javascript">
var data = ({});

function getData() {
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "Companies.csv",
            dataType: "text",
            success: function(input) {processData(input);}
        });
    });

    function processData(csvText){
        var csvData = $.csv.toArrays(csvText);
        data = csvData;
    }
};

data = <?php echo json_encode("42"); ?>
</script>