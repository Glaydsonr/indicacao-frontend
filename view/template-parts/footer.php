<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" crossorigin="anonymous"></script>
<script src="../../assets/datatable.js" crossorigin="anonymous"></script>

<script>
    <?php
    $api = new Rest();
    $url = $api->list()
    ?>

    let base_url = "<?php echo $url; ?>";
</script>

<script src="../../assets/main.js" crossorigin="anonymous"></script>
</body>
</html>