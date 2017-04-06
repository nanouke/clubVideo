$(function () {

    var $formRechercher = $('#form-chercherClient');

    $formRechercher.submit(function (e) {

        e.stopPropagation();
        e.preventDefault();

        var url = $(this).prop('action');

        var method = $(this).prop('method');

        var formData = {
            'nom' : $('#retour_prenom_nom').val(),
            'prenom' : $('#retour_prenom_client').val()
        };

        $.ajax({
            url: url,
            method: method,
            data: formData,
            success: function (data, textStatus, jqXHR ) {

                console.log(data);

                // for(var i = 0; i < data.lenght; i++)
                // {
                //     $('#transaction').append('<option value="' + data[i] + '">' + data[i] + '</option>')
                // }


            }
        });

    });

});