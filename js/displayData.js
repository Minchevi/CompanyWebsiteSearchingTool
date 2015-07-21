function displayData(companiesString) {
    var data = JSON.parse(companiesString);
    $(".company").remove();

    data.forEach(function (company) {
        if ($('.company').length < 10) {
            $('#companies').append('<li class="company"><a href="' + company.website + '" target="_blank">' + company.name + '</a></li>');
        }
    });
};