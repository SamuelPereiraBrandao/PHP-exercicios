<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <?php
    if(isset($_POST['enviar-formulario'])){
        // array de erros
        $erros = array();
        // sanitização 
        $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
        
        $idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade,FILTER_VALIDATE_INT)){
            $erros[] = "Idade precisa ser um número inteiro!";
        }
        
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $erros[] = "Email inválido!";
        }
        
        $url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
        if(!filter_var($url,FILTER_VALIDATE_URL)){
            $erros[] = "URL inválido!";
        }
        
        
        //exibindo mensagens
        if(!empty($erros)){
            foreach($erros as $erro){
                echo "<li> $erro </li>";} 
            } else{
                echo "Parabéns, seus dados estão corretos!";
            }
            
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"> <br>
        Idade: <input type="text" name="idade"> <br>
        Email: <input type="text" name="email"> <br>
        IP: <input type="text" name="ip"> <br>
        URL: <input type="text" name="url"> <br>
        <button type="submit" name="enviar-formulario"> Enviar </button>
    </form>
</body>
</html>