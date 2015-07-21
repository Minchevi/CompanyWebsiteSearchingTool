$( "#searchTerm" ).on('change keyup paste', function() {
    var value = $(this).val();
    console.log(value);
    if (value.length>1) {
        var ajaxURL = 'php/getData.php';
        $.ajax({
            type: 'POST',
            url: ajaxURL,
            dataType: 'text',
            data: value
        }).done(function(result) {
            console.log(result);
           //displayData(result);
        });
    }
});
