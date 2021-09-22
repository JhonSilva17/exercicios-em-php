<?php 
    include './../head.php';
    include './../header.php';
?>

        <section class="bg-light p-3 text-dark fs-4">
            <p>1. Crie um jogo onde o computador vai sortear um número entre 1 e 5 o
            jogador vai tentar descobrir qual foi o valor sorteado.</p>
            <form action="ex1.php" method="GET">
                <label for="num">Informeu um número entre 1 e 5:</label>
                <div class="d-flex gap-2 mt-2">
                    <input type="number" id="num" class="form-control w-25" name="num" min="1" max="5">
                    <input type="submit" value="Enviar" class="btn btn-primary fs-5">
                </div>
            </form>
    
            <p class="fw-bold mt-3">
               <?php 
                    $num_sorteado = rand(1, 5);
                    $num_user = isset($_GET['num']) ? $_GET['num'] : '';

                    if ($num_user === '') { 
                        echo "Informe um valor";

                    } else if ($num_user == $num_sorteado) {
                        echo "<span class='text-success'>Parábens, você acertou</span>";
                    } else if ($num_user >= 4 && $num_user < 5) {
                        echo "<span class='text-warning'>Hmmm... Quase que você acertou.</span>";

                    } else if ($num_user >= 2 && $num_user < 4) {
                        echo "<span class='text-danger'>Nossa senhora... Mais alguns números e você acertaria.</span>";
                    } else {
                        echo "<span class='text-danger'> Errou feio, tente novamente. </span>";
                    }
               ?>
            </p>
       

<?php include './../footer.php' ?>