<?php

include_once('conexao.php');

$result = mysqli_query($conn,"SELECT * FROM veiculos");

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LoCar Veiculos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/TrabalhoWeb/css/css.css">
  


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <div class="centro1100">
        <div class="boxpagina">

            <nav class="navbar navbar-expand-lg navbar-light" style="border-bottom: 1px solid #FF99FF">
                <a class="navbar-brand" href="#"> <img src="http://localhost/TrabalhoWeb/image/Logotipo.jpg" style="width: 40% ; text-align:center"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <h1 style="text-align:center; font-weight: bold;" >Veículos</h1>
                        </li>

                    </ul>

                </div>
            </nav>

            <div class="tabeltable">
                <table class="table" style="overflow: scroll;">
                    <thead>
                        <tr>
                            <th scope="col">Código Veículo</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Status</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Data de devolução</th>
                          
                            <th scope="col">Quero alugar </th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    
                     <?php while($dado= mysqli_fetch_array($result)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $dado["codVeiculo"]; ?></td>
                            
                            <td><?php echo $dado["placa"]; ?></td>
                            <td><?php echo $dado["modelo"]; ?></td>
                            <td><?php echo $dado["statusVeiculo"]; ?></td>
                            <td style="width: 10%; margin: auto"><img src="<?php echo $dado["imagem"]; ?>" style= "width: 120%"></td>
                            <td><?php echo $dado["dataDevolucao"]; ?></td>                      
                            <td><button type="button" class="btn btn-outline-success"onclick="window.location.href='http://localhost/TrabalhoWeb/login.php';">Alugar</button></td>
                             
                     </tr>
                       
                    </tbody>
                    <?php } ?>                                  
</table>
</div>
</div>
</body> 

<div class="rodape"> Seja bem vindo a LoCar Veículos!!!</div>

</div>
</body>

</html>
