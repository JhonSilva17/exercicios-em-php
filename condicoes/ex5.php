<?php 
    include './../head.php';
    include './../header.php';
?>

        <section class="bg-light p-3 text-dark fs-4">
            <p>5. Crie um jogo de JoKenPo (Pedra-Papel-Tesoura)</p>
            <form action="ex5.php" method="GET">
                <label for="name" class="d-block mb-2 text-secondary">Escolha entre: Pedra, Papel e Tesoura</label>
                <div class="d-flex gap-3">
                    <input type="text" id="name" name="name" class="form-control w-50" required>
                    <button class="btn btn-primary fs-5"> Enviar</button>
                </div>
            </form>
    
    
            <p class="fw-bold mt-3">
                <?php 
                    // Nome escolhido pelo usuário
                    $jogo_user = strtolower(isset($_GET['name']) ? $_GET['name'] : 0);

                    // Nome sorteado pelo computador 
                    $nomes_jogo = ['pedra', 'papel', 'tesoura'];
                    $number_aleatorio = rand(0, count($nomes_jogo) - 1);
                    $nome_aleatorio = $nomes_jogo[$number_aleatorio ];


                    if ($jogo_user === $nome_aleatorio) {
                        echo "<span class='text-warning'>Deu empate</span>";
                    
                    } else if ($jogo_user === 'pedra' && $nome_aleatorio === 'papel') {
                        echo "<span class='text-danger'>Você perdeu. Papel vence Pedra</span>";

                    } else if ($jogo_user === 'papel' && $nome_aleatorio === 'tesoura') {
                        echo "<span class='text-danger'>Você perdeu. Tesoura vence Papel</span>";
                    
                    } else if ($jogo_user === 'tesoura' && $nome_aleatorio === 'pedra') {
                        echo "<span class='text-danger'>Você perdeu. Pedra vence Tesoura</span>";

                    } else if ($jogo_user === "pedra" && $nome_aleatorio === 'tesoura') {
                        echo "<span class='text-success'>Você venceu. Pedra vence Tesoura</span>";

                    } else if ($jogo_user === "papel" && $nome_aleatorio === 'pedra') {
                        echo "<span class='text-success'>Você venceu. Papel vence Pedra</span>";

                    } else if ($jogo_user === "tesoura" && $nome_aleatorio === 'papel') {
                        echo "<span class='text-success'>Você venceu. Tesoura vence Papel</span>";
                    } 

                    if ($jogo_user) {
                        echo '<br> <span class="fw-normal">Você</span>: ' . ucfirst($jogo_user) . '<br> <span class="fw-normal">Computador:</span> ' . ucfirst($nome_aleatorio);
                    } else {
                        echo "Digite um valor";
                    }
                    
                    
                ?>
            </p>
        </section>

        <div class="row justify-content-end">
            <a href="./../index.html" class="text-decoration-none fs-4 mt-4 btn btn-primary px-5 w-25">Voltar</a>
        </div>
        
    </div>


</div>
<!--CONTAINER-->

<?php include './../footer.php' ?>