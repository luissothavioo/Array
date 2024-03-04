<?php
    include 'dados.php';

    function filtro($array, $valor){
        $resultado = array();
            foreach($array as $a){
                if($a['estilo'] == $valor)
                    $resultado[] = $a;
            }
        return $resultado;
    }
    $rock = filtro($dados, 'rock');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Arrays em PHP</title>
</head>

<header>
    <nav class="nav bg-info text-white justify-content-center">
        <p class="nav-link disabled text-dark font-weight-bold">Utilizando Arrays em PHP</p>
        <a href="index.html" class="nav-link text-dark">Início</a>
    </nav>
</header>

<body>
    <div class="jumbotron">
        <h1 class="text-center">Manipulação de Arrays em PHP</h1>
        <h6 class="text-center">Mostrando todos os dados cadastrados</h6>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">idade</th>
                    <th scope="col">Estilo preferido</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rock as $linha => $item):?>
                    <tr>
                        <th scope="row"><?php echo $item['nome'] ?></th>
                        <td><?php echo $item['idade'] ?></td>
                        <td><?php echo $item['estilo'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="container-fluid fixed-bottom bg-info">
        <div class="card-footer text-center">
            <p class="text-dark font-weight-bold">CEFET-MG Varginha 2024</p>
        </div>
    </div>
</body>

</html>