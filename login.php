<?php
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoCar Veiculos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
    <div class="centro900">
        <div class="boxlogin">

            <div class="ladoesquerdo">
                <img src="image/Logotipo.jpg">
                <form method="POST" action="conexao/loginsistema.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuário</label>
                        <input type="text" name="login" class="form-control" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>
                    <button type="submit" name="btn-entrar" class="btn btn-primary">Entrar</button>
                    <button type="button" class="btn btn-secondary" onclick="window.location='cadastrousuario.html';">Cadastrar-se</button>
                </form>
             
            </div>
            <div class="rodape"> Seja bem vindo a LoCar Veículos!!!</div>

        </div>
    </div>
</body>

</html>