$(function() {
    $('table').DataTable();

    //créer une facture
    $('create').on('click', function (e) {
        let formOrder = $('#formOrder')
        if (formOrder[0].checkValidity()) {
            e.preventDefault();
            $.ajax({
                url: 'process.php',
                type: 'post',
                data: formOrder.serialize() + '&action=create',
                success: function(response) {
                    $('#createModal').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title:'Succès',
                    })
                    formOrder[0].reset();
                }
            })
        }
    })

})