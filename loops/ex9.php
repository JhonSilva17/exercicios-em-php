<?php include './../head.php'; ?>


<?php include './../header.php'; ?>

<?php



?>

<section class="bg-light p-3 text-dark fs-4">
    <p>9. Faça um algoritmo que pergunte ao usuário um número inteiro e positivo
        qualquer e mostre uma contagem até esse valor:
        Ex: Digite um valor: 35
        Contagem: 1 2 3 4 5 6 7 ... 33 34 35 Acabou!
    </p>
    <form action="./ex9.php" method="GET" class="border-top border-3 mb-3">
        <label for="num" class="fw-bold my-2">Informe um valor qualquer</label>
        <div class="d-flex gap-3">
            <input type="number" name="num" id="num" class="form-control w-50" min="0">
            <button class="btn btn-primary px-3 fs-4">Enviar</button>
        </div>
    </form>

    <?php 
        $num = isset($_GET['num']) ? $_GET['num'] : 0;
        $contador = 1;
        while ($contador <= $num) {
            echo "<span class='fw-bold'> $contador </span>";
            $contador++;
        }
        echo " Acabou!!";
    
    ?>

    <?php include './../footer.php'; ?>