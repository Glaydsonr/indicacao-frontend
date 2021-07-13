<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" crossorigin="anonymous"></script>
<script src="../../assets/datatable.js" crossorigin="anonymous"></script>
<script src="../../assets/main.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: true});
        $('#phone').mask('(00) 0 0000-0000');
        $('#dataTable').dataTable();

        $('.edit').click(function() {
            let id = $(this).attr('data-id');
            $.ajax({
                type: 'POST',
                url: 'src/update-ajax.php',
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
                type: 'POST',
                url: 'src/delete-ajax.php',
                data: {'id': id},
                success: function(data)
                {
                    location.reload();
                }
            });
        });

        $("#create").submit(function(e) {

            e.preventDefault();

            let form = $(this);
            let url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(data)
                {
                    window.location.href = '/';
                }
            });
        });
    });


</script>

</body>
</html>