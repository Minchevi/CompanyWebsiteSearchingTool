$( "#searchTerm" ).on('change keyup paste', function() {
    var value = $(this).val();
    if (value.length>2) {
        var ajaxURL = 'php/getData.php';
        $.ajax({
            type: 'POST',
            url: ajaxURL,
            dataType: 'text',
            data: value
        }).done(function(result) {
           displayData(result);
        });
    }
});
