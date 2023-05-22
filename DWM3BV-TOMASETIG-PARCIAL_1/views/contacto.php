
<main class="container">
    <div class="d-flex justify-content-center p-5">
        <div>
            <h1 class="text-center mb-5 fw-bold">No dudes en contactarnos!</h1>
            <form action="procesarform.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Escribi acá tus dudas:</label>
                    <textarea class="form-control" name="dudas" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-danger mt-3">Enviar</button>
            </form>
            
            <?php if (isset($resumen)) : ?>
                <h2 class="mt-5">Resumen de los datos enviados:</h2>
                <pre><?php echo $resumen; ?></pre>
            <?php endif; ?>
                
             
        </div>
    </div>
   
</main>