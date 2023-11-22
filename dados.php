<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="form-container">
        <div class="form">
            <?php 
                    echo "Olá, " . $_POST['nome'] . "!<br>";
                if(isset($_POST['enviar-formulario'])):
                    $erros = array();
                // VALIDAÇÃO DE NÚMERO INTEIRO
                if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                    $erros[] = "Idade precisa ser um número inteiro para que você possa prosseguir. <br>";
                endif;
                // VALIDAÇÃO DE EMAIL
                if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                    $erros[] = "Seu email é inválido. Precisa de um email válido para prosseguir. <br>";
                endif;
                if(!empty($erros)):
                    foreach($erros as $erro):
                        echo "$erro";
                    endforeach;
                else:
                    echo "Recebemos seus dados! Você já está concorrendo, agora é só aguardar! :) <br>";
                endif;
                endif;
            ?>
            <button>
                <a href="./index.html">Retornar ao Cadastro</a>
            </button>
            
        </div>
    </div>
</body>
</html>
