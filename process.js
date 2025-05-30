$(function() {
    $('table').DataTable();

    //créer une facture
    $('#create').on('click', function (e) {
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

    // Récupérer les factures
    getBills();
    function getBills() {
        $.ajax({
            url: 'process.php',
            type: 'post',
            data: { action: 'fetch'},
            success: function (response) {
                $('#orderTable').html(response);
                $('table').DataTable({
                    order : [0, 'desc']
                });
            }
        })
    }

    $('body').on('click', '.editBtn', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'process.php',
            type: 'post',
            data: {workingId: this.dataset.id},
            success: function(response) {
                console.log(responseg)
            }
        })
    })
})