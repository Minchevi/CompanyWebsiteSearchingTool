$(function () {
    // Attach on 'keyup' for live update
    $("#tb-filter").on('keyup', function () {
        $( ".company" ).remove();
        var value,
            $companies;
        value = $(this).val().toLowerCase();

        if (value.length > 2) {
            data.forEach(function(company){
                var companyName = company[1].toLowerCase();

                if(companyName.indexOf(value) > -1 &&  $('.company').length<10){
                    displayData(company);
                }
            });

        }
    });
});