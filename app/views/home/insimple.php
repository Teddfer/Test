<?php
require_once __DIR__ . '/../templates/head.php'
?>

<main class="px-3">
    <div class="position-relative overflow-hidden p-3 p-md-0 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1>Cálculo de Interés Simple</h1>
            <form action="http://testdeloc.test/home/interessimple" method="post">
                <div class="mb-3">
                    <label for="capital" class="form-label">Capital Inicial</label>
                    <input type="number" class="form-control" id="capital" name="capital" value="<?= $capital ?>">
                </div>
                <div class="mb-3">
                    <label for="tasa" class="form-label">Tasa de Interés</label>
                    <input type="number" class="form-control" id="tasa" name="tasa" value="<?= $tasa ?>">
                </div>
                <div class="mb-3">
                    <label for="tiempo" class="form-label">Tiempo en años</label>
                    <input type="number" class="form-control" id="tiempo" name="tiempo" value="<?= $tiempo ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary form-control">Aceptar</button>
                </div>
            </form>
            <div class="mb-3">
                <label>El interés simple es: </label>
                <input type="text" class="form-control" id="rpta" value="<?= $rpta ?>" readonly>
            </div>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/../templates/footer.php'
?>