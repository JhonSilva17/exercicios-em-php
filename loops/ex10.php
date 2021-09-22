<?php include './../head.php'; ?>


<?php include './../header.php'; ?>

<?php



?>

<section class="bg-light p-3 text-dark fs-4">
    <p>10. Crie um algoritmo que leia o valor inicial da contagem, o valor final e o
        incremento, mostrando em seguida todos os valores no intervalo:
        Ex: Digite o primeiro Valor: 3
        Digite o último Valor: 10
        Digite o incremento: 2
        Contagem: 3 5 7 9 Acabou!
    </p>
    <form action="./ex10.php" method="GET" class="border-top border-3 mb-3">
        <label for="ini" class="fw-bold my-2">Informe o valor inicial</label>
         <input type="number" name="ini" id="ini" class="form-control w-50" min="0" required>

        <label for="fin" class="fw-bold my-2">Informe o valor final</label>
        <input type="number" name="fin" id="fin" class="form-control w-50" min="0" required>

        <label for="inc" class="fw-bold my-2">Informe o incremento</label>
        <div class="d-flex gap-3">
            <input type="number" name="inc" id="nuincm" class="form-control w-50" min="0" required>
            <button class="btn btn-primary px-3 fs-4">Enviar</button>
        </div>
    </form>

    <?php
        $inicial = isset($_GET['ini']) ? $_GET[  'ini'] : '';
        $final = isset($_GET['fin']) ? $_GET['fin'] : '';
        $i = isset($_GET['inc']) ? $_GET['inc'] : '';

        if ($inicial >= $final) {
            echo "Valores inconclusivos. O valor inicial tem de ser menor que o valor final";
        } else {
            $contador = $inicial;
            while ($contador <= $final) {
                echo " $contador ";
                $contador+=$i;
            }
        }
 
       
    ?>

    <?php include './../footer.php'; ?>