$( "#searchTerm" ).keydown((function() {
    if ($('#searchTerm').val().length>1) {
        console.log('opaaa');
        $('.search').submit(function(){


            var ajaxURL = '/getData.php';
            var input = $('#searchTerm').val();
            $.ajax({
                type: 'POST',
                url: ajaxURL,
                data: {
                    input: input
                }
            });

            return false;

        });
    }
    }));