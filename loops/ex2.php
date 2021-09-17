<?php include './../head.php'; ?>
    


<?php include './../header.php'; ?>

            <section class="bg-light p-3 text-dark fs-4">
                <p>2. Escreva um programa que peça ao utilizador um nome e um número inteiro (entre 1 e 20). Deverá mostrar esse nome um número de vezes igual a esse valor inteiro.</p>
                <p class="fw-bold mt-3">
                    <?php 
                        $nome = isset($_GET['nome']) ? $_GET['nome'] : "Valor não informado";
                        $int = isset($_GET['int']) ? $_GET['int'] : 1;
                        $quant = 0;

                        for ($count = 1; $count <= $int; $count++) {
                            echo $nome . ' ';
                            $quant++;
                        }

                        echo "<br> Número de vezes: $quant";
                    
                    ?>
                </p>
            </section>
            <div class="row justify-content-end">
                <a href="./../index.html" class="text-decoration-none fs-4 mt-4 btn btn-primary px-5 w-25">Voltar</a>
            </div>
        </div>


    </div> <!--CONTAINE-->


    <?php include './../footer.php'; ?>