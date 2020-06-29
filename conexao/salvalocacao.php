<?php
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $cpf =   $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $dataLocacao  = $_POST['dataLocacao'];
    $dataDevolucao = $_POST['dataDevolucao'];

    $resultsalvar = "INSERT INTO locacao ( Nome, cpf, email, telefone, dataLocacao, dataDevolucao) VALUES ('$nome', '$cpf', '$email', '$telefone', '$dataLocacao' , '$dataDevolucao')";
    $resultadosalvo= mysqli_query($conn, $resultsalvar)
    
    ?>

<!DOCTYPE html>

<html>
<head>
    
    <title>LoCar Veiculos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/TrabalhoWeb/css/css.css">

</head>
<body>
    <div class="centro300">
        <div class="boxcadastro">
        <img src="http://localhost/TrabalhoWeb/image/Logotipo.jpg" style="width: 25%">
            <h3 style="text-align: center; margin-top: 15px;"> Locação efetuada com sucesso!!!</h3>
            <form method="POST" action="conexao/salvausuario.php">
                
            </form>
            <button class="subnavbtn1" onclick="window.location.href ='http://localhost/TrabalhoWeb/home.html';">Voltar </i></button>
        </div>

        <div class="rodape2 "> Seja bem vindo a LoCar Veículos!!!</div>

    </div>

</html>