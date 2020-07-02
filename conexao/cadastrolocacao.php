
<?php


 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LoCar Veiculos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/TrabalhoWeb/css/css.css">

</head>

<body>
    <div class="centro300">
        <div class="boxcadastro">
        <img src="http://localhost/TrabalhoWeb/image/Logotipo.jpg" style="width: 25%">
            <h3 style="text-align: center; margin-top: 15px;">Cadastro de Locação</h3>
            <form method="POST" action="salvalocacao.php">
                <input type="text" name="nome" class="form-control" style="margin-top: 10px;" placeholder="Nome">
                <input type="text" name="cpf" class="form-control" style="margin-top: 10px;" placeholder="CPF">
                <input type="text" name="email" class="form-control" style="margin-top: 10px;" placeholder="Email">
                <input type="text" name="telefone" class="form-control" style="margin-top: 10px;" placeholder="Telefone">
                <input type="text" name="dataLocacao" class="form-control" style="margin-top: 10px;" placeholder="Data Locação">
                <input type="text" name="dataDevolucao" class="form-control" style="margin-top: 10px;" placeholder="Data Devolução">

                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">CONCLUIR LOCAÇÃO</button>
            </form>

        </div>

        <div class="rodape2"> Seja bem vindo a LoCar Veículos!!!</div>

    </div>
</body>

</html>