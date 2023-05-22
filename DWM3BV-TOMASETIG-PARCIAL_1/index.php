<?php
    $vista = $_GET['seccion']??null;
    $vista = $vista ? $vista : 'home';
    $existe = file_exists("views/$vista.php");
    $vista_final = $existe ? $vista : '404';
?>

<script>
    var seccion = '<?= $vista ?>';
    console.log("seccion: " + seccion);
    console.log("existe: " + `<?php echo var_dump($existe) ?>`);
</script>

<?php include('partials/header.php') ?>
<?php include ("views/$vista_final.php") ?>

<?php include('partials/footer.php') ?>
