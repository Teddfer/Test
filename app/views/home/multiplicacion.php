<?php
require_once __DIR__ . '/../templates/head.php'
?>

<main class="px-3">
    <div class="position-relative overflow-hidden p-3 p-md-1 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1>Multiplicación de Numeros</h1>
            <form action="http://testdeloc.test/home/multiplicacion" method="post">
                <div class="mb-3">
                    <label for="number1" class="form-label">Número 1</label>
                    <input type="number" class="form-control" id="number1" name="number1" value="<?= $num1 ?>">
                </div>
                <div class="mb-3">
                    <label for="number2" class="form-label">Número 2</label>
                    <input type="number" class="form-control" id="number2" name="number2" value="<?= $num2 ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary form-control">Aceptar</button>
                </div>
            </form>
            <div class="mb-3">
                <label>La respuesta es: </label>
                <input type="text" class="form-control" id="rpta" value="<?= $rpta ?>" readonly>
            </div>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/../templates/footer.php'
?>