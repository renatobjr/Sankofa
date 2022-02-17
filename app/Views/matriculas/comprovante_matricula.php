<?php
    $locale = setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    $formatter = new IntlDateFormatter($locale, IntlDateFormatter::LONG, IntlDateFormatter::NONE, 'America/Sao_Paulo');
    $date = $formatter->format(new DateTime());
?>

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
                    <strong>Ficha do Aluno</strong>
                </h6>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <table>
                    <!-- Dados do beneficiario -->
                    <tr>
                        <td colspan="5"><strong>Dados do Beneficiário(a)</strong></td>
                    </tr>
                    <tr>
                        <td colspan="2">Nome: <?php echo $aluno['nome_beneficiario']  ;?></td>
                        <td colspan="3">Data de Nascimento: <?php echo date('d/m/Y',strtotime($aluno['data_nascimento'])) ;?></td>
                    </tr>
                    <tr>
                        <td>Etnia/Raça/cor: <?php echo $aluno['etnia']['descricao'] ;?></td>
                        <td>Idade: <?php echo $aluno['idade'] ;?> anos</td>
                        <td>Sexo: <?php echo $aluno['sexo']['descricao'] ;?></td>
                        <td>Naturalidade: <?php echo $aluno['naturalidade'] ;?></td>
                        <td>UF: <?php echo $aluno['uf']['descricao'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Certidão de Nascimento Nº: <?php echo $aluno['certidao_nascimento'] ;?></td>
                        <td colspan="1">Folha: <?php echo $aluno['folha_certidao_nascimento'] ;?></td>
                        <td colspan="1">Livro: <?php echo $aluno['livro'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Pessoa com deficiência: <?php echo $aluno['pessoa_deficiencia']['descricao'] ;?></td>
                        <td colspan="3">Qual: <?php echo $aluno['tipo_deficiencia'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="1">Nome da Escola: <?php echo $aluno['nome_escola'] ;?></td>
                        <td colspan="1">Nível: <?php echo $aluno['nivel_escolaridade']['descricao'] ;?></td>
                        <td colspan="1">Ano Escolar: <?php echo $aluno['ano_escolar'] ;?></td>
                        <td colspan="2">Turno: <?php echo $aluno['turno']['descricao'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="1">Vacinado contra COVID - 19: <?php echo $aluno['confirma_vacina']['descricao'] ;?></td>
                        <td colspan="1">Frequenta a EJA: <?php echo $aluno['eja']['descricao'] ;?></td>
                        <td colspan="3">Turma: <?php echo $aluno['turma']['descricao'] ;?></td>
                    </tr>
                    <!-- Categoria -->
                    <tr>
                        <td colspan="5"><strong>Categoria do Público</strong></td>
                    </tr>
                    <tr>
                        <td colspan="1">Usuário do Programa Auxílio Brasil: <?php echo $aluno['auxilio_brasil']['descricao'] ;?></td>
                        <td colspan="2">Acompanhado por outro Serviço: <?php echo $aluno['servico_socioassistencial']['descricao'] ;?></td>
                        <td colspan="2">Qual:<?php echo $aluno['servico_socioassistencial_positivo'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Dados do Responsável</strong></td>
                    </tr>
                    <tr>
                        <td colspan="2">Nome da Mãe: <?php echo $aluno['nome_mae'] ;?></td>
                        <td colspan="3">Nome do Responsável: <?php echo $aluno['nome_responsavel'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="1">NIS: <?php echo $aluno['nis'] ;?></td>
                        <td colspan="1">CPF: <?php echo $aluno['cpf_responsavel'] ;?></td>
                        <td colspan="1">RG: <?php echo $aluno['identidade_responsavel'] ;?></td>
                        <td colspan="2">Órgão Emissor: <?php echo $aluno['orgao_emissor_responsavel'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="5">Endereço: <?php echo $aluno['endereco'] ;?>, <?php echo $aluno['numero'] ;?>, <?php echo $aluno['bairro'] ;?>, <?php echo $aluno['cep'] ;?>, Pedras de Fogo</td>
                    </tr>
                    <tr>
                        <td colspan="5">Condição da Moradia: <?php echo $aluno['tipo_moradia']['descricao'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Dados Socioeconomicos</strong></td>
                    </tr>
                    <tr>
                        <td colspan="5">Composição Familiar: <?php echo $aluno['composicao_familiar'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Nº de pessoas com Atividades Laborativas: <?php echo $aluno['quantidade_atividades_laborativas'] ;?></td>
                        <td colspan="3">Nº de pessoas com Vínculos Empregáticios: <?php echo $aluno['quantidade_vinculo_empregaticio'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="1">A família possuí benefícios? <?php echo $aluno['beneficio_familia']['descricao'] ;?></td>
                        <td colspan="1">Quais? <?php echo $aluno['descricao_beneficios'] ;?></td>
                        <td colspan="3">Renda Total da Família: R$ <?php echo $aluno['renda_total'] ;?></td>
                    </tr>
                    <tr>
                        <td colspan="5">Está passando por alguma violação de direitos? <?php echo $aluno['violacao_direitos'] ;?></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
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
                    <strong>Comprovante de Inscrição</strong>
                </h6>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <p>
                    Eu <?php echo $aluno['nome_responsavel'] ;?> confirmo a participação do meu/minha filha/o no 
                    Projeto Sankofa por atender os requisitos de ter <?php echo $aluno['idade'] ;?> anos e 
                    frequentar o <?php echo $aluno['ano_escolar'] ;?> Ano do Ensino <?php echo $aluno['nivel_escolaridade']['descricao'] ;?>. 
                    A criança e/ou adolescente fará parte da <?php echo $aluno['turma']['descricao'] ;?>. 
                    Entre os meses de março e dezembro assistirá às oficinas de Português, Matemática, Ciências, Iniciação Teatral, Geo-história,
                    Práticas Terapêuticas e Gestão de Conflitos e Cultura Digital. 
                </p>
                <p class="center-align">
                    <hr style="width: 50%; margin-top:100px">
                </p>
                <p class="center-align">
                    Assinatura do(a) Responsável
                </p>
                <p class="center-align">
                    Pedras de Fogo <?php echo $date;?>.
                </p>
            </div>
        </div>
        <div class="row">
            <hr>
        </div>
        <div class="row noprint">
            <div class="col s12 m12 l12">
                <object data="<?php echo base_url('docs/' . $aluno['documentos_digitalizados']) ;?>" type="application/pdf" style="height:800px;width:100% "></object>
            </div>
        </div>
    </div>
</body>

</html>