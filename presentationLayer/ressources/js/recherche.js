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
            dataType: 'text',
            success: function (data) {


                var transactions = JSON.parse(data.substr(1));

                var $transaction = $('#transaction');

                $('#prenomRetour').val($('#retour_prenom_nom').val());
                $('#nomRetour').val($('#retour_prenom_client').val());

                for(var i = 0; i < transactions.length; i++)
                {
                    $transaction.append('<option value="' + transactions[i].transactionid + '">' + transactions[i].nom + '</option>')

                    console.log(transactions[i]);
                }


            }
        });

    });

});