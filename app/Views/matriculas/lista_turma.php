<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
        integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @media print {
            .noprint {
                visibility: hidden;
            }
        }
    </style>
    <title>Comprovante de Matrícula</title>
</head>

<body>
    <div class="container">
        <div class="row center">
            <div class="col s12 m12 l12">
                <img class="responsive-img" src="<?php echo base_url('svg/logo.svg') ;?>" alt="" width="300px">
                <h6 class="center-align">
                    Organiação das Nações Unidas para a Educação, a Ciência e a Cultura - UNESCO <br>
                    Rede Globo de Televisão - Criança Esparança 2022 <br>
                    Casa de Cultura Ilê Asé D'Osoguiã - CCIAO <br>
                    Griot Assessoria Educacional <br>
                    Governo de Pedras de Fogo <br>
                    Intituto Federal de Educação - IFPB - Campus Pedras de Fogo
                </h6>
                <h6 class="center-align">
                    <strong>PROJETO SANKOFA - Olhar para o Passado para construir o Futuro</strong>
                </h6>
                <h6 class="center-align">
                    <strong>Lista de Alunos Matriculados - <?php echo $descricao ;?></strong>
                </h6>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <table>
                    <thead>
                        <tr>
                            <td>Beneficiário</td>
                            <td>Mãe</td>
                            <td>Responsável</td>
                            <td>Contato</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista as $aluno) : ?>
                        <tr>
                            <td><?php echo $aluno['nome_beneficiario'] ;?></td>
                            <td><?php echo $aluno['nome_mae'] ;?></td>
                            <td><?php echo $aluno['nome_responsavel'] ;?></td>
                            <td><?php echo $aluno['telefone_contato'] ;?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>