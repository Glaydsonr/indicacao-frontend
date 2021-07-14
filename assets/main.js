$(document).ready(function(){
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#phone').mask('(00) 0 0000-0000');
    $('#dataTable').dataTable();

    $('.edit').click(function() {
        let id = $(this).attr('data-id');
        $.ajax({
            type: 'PUT',
            url: base_url + id + '/status',
            data: {'id': id},
            success: function(data)
            {
                location.reload();
            }
        });
    });

    $('.del').click(function() {
        let id = $(this).attr('data-id');

        $.ajax({
            type: 'DELETE',
            url: base_url + id,
            data: {'id': id},
            complete: function() {
                window.location.href = '/'
            },
        });

    });

    $('#create').submit(function(e) {

        e.preventDefault();

        let form = $(this);
        let url = form.attr('action');

        $('.mb-3 p').each(function(index, item) {
            item.remove();
        });

        $.ajax({
            type: 'POST',
            url: base_url,
            data: $(this).serializeArray(),
            success: function(data)
            {
                window.location.href = '/'
            },
            error: function(request) {
                const error = request.responseJSON.errors;
                $.each(error, function(index, value){
                    $(`.field_${index}`).append(`<p style="color:red;">${value}</p>`);
                });
            },
        });
    });
});