<?php include './../head.php'; ?>


<?php include './../header.php'; ?>

            <?php 
            
                $idades = [4, 10, 2, 18, 45, 23, 33, 10, 20, 90];
                $maior_18 = 0;
                $menor_5 = 0;
                $maior_idade =  max($idades);
                $soma = 0;

                foreach ($idades as $idade) {
                    $soma += $idade;
                    
                    if ($idade <= 5) {
                        $menor_5++;
                    } else if ($idade >= 18) {
                        $maior_18++;
                    }
                }

                $media = $soma / count($idades);

                
              

            ?>

            <section class="bg-light p-3 text-dark fs-4">
                <p>8. Crie um algoritmo que leia a idade de 10 pessoas, mostrando no final: <br> 
                a) Qual é a média de idade do grupo: <span class="fw-bold"><?= number_format($media, 2, ',') ?></span> <br> 
                b) Quantas pessoas tem mais de 18 anos:  <span class="fw-bold"><?= $maior_18 ?> pessoas</span> <br> 
                c) Quantas pessoas tem menos de 5 anos: <span class="fw-bold"><?= $menor_5 ?> pessoas</span> <br> 
                d) Qual foi a maior idade lida: <span class="fw-bold"><?= $maior_idade ?></span></p>
            </section>
            <div class="row justify-content-end">
                <a href="./../index.html" class="text-decoration-none fs-4 mt-4 btn btn-primary px-5 w-25">Voltar</a>
            </div>
        </div>


    </div>
    <!--CONTAINE-->


    <?php include './../footer.php'; ?>