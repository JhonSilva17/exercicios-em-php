<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

            <section class="bg-light p-3 text-dark fs-4">
                <p>3. Crie uma função que receba três inteiros como argumentos (ano, mês, dia) e verifique se se trata de um data válida. O ano deverá estar entre 1900 e o presente ano.</p>
                <p class="mt-3 fw-bold">
                    <?php 
                        
                        function dataValida($dia, $mes, $ano) {
                            $ano_atual = date('Y');
                            $mes_atual = date('m');
                            $dia_atual = date('j') - 1;
                            

                            if (($ano > $ano_atual) || ($ano < 1900) || ($mes > $mes_atual) || ($dia > $dia_atual)) {
                                echo 'Insira uma data válida';
                            } else {
                                echo "Data fornecida: $dia/$mes/$ano";
                            }
                        }
                        dataValida('02', '09', '2021');

                    ?>
                </p>
            </section>
            <div class="row justify-content-end">
                <a href="./../index.html" class="text-decoration-none fs-4 mt-4 btn btn-primary px-5 w-25">Voltar</a>
            </div>
        </div>

    </div> <!--CONTAINE-->


    <?php include './../footer.php'; ?>