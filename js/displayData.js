function displayData(company) {
    var companyName = company[1];
    var companyLink = company[2];

    $('#companies').append('<li class="company"><a href="'+companyLink+'" target="_blank">'+companyName+'</a></li>');
};