<?php

require '../controller/controller.class.php';
require '../model/model.inc.php';

$veiculosArray = getWholeDB();

$veiculos = new Veiculos($veiculosArray);

$veiculosEstado = $veiculos->getVehicleStatus();

?>


<!DOCTYPE html>
<html lang="PT-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
</head>

<body>

    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <a href="../index.php">Voltar ao início</a>
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">
                                    Marca
                                </th>
                                <th class="column2">
                                    Modelo
                                </th>
                                <th class="column3">
                                    Cor
                                </th>
                                <th class="column4">
                                    Combustível
                                </th>
                                <th class="column5">
                                    Categoria
                                </th>
                                <th class="column6">
                                    Preço
                                </th>
                                <th class="column7">
                                    Estado
                                </th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($veiculosEstado as $veiculo => $caracteristicas) {
                        ?>
                            <tr>
                                <td class="column1">
                                    <?= ($caracteristicas['Marca'] == '') ? '&nbsp;' : $caracteristicas['Marca']; ?>
                                </td>
                                <td class="column2">
                                    <?= ($caracteristicas['Modelo'] == '') ? '&nbsp;' : $caracteristicas['Modelo']; ?>
                                </td>
                                <td class="column3">
                                    <?= ($caracteristicas['Cor'] == '') ? '&nbsp;' : $caracteristicas['Cor']; ?>
                                </td>
                                <td class="column4">
                                    <?= ($caracteristicas['Combustível'] == '') ? '&nbsp;' : $caracteristicas['Combustível']; ?>
                                </td>
                                <td class="column5">
                                    <?= ($caracteristicas['Categoria'] == '') ? '&nbsp;' : $caracteristicas['Categoria']; ?>
                                </td>
                                <td class="column6">
                                    <?= ($caracteristicas['Preço'] == '') ? '&nbsp;' : $caracteristicas['Preço']; ?>
                                </td>

                                <?php
                                if ($caracteristicas['Estado'] == 'Válido') {
                                    echo '<td class="column7" style="color: #00C4B3">';
                                    echo ($caracteristicas['Estado'] == '') ? '&nbsp;' : $caracteristicas['Estado'];
                                } else {
                                    echo '<td class="column7" style="color: #F95D50">';
                                    echo ($caracteristicas['Estado'] == '') ? '&nbsp;' : $caracteristicas['Estado'];
                                }

                                ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <br>
                    <a>Desafio 1 - Listagem de todos os veículos com informação válida e inválida.</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/popper.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/select2/select2.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>