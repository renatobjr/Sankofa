<?php echo $this->extend('components/default') ;?>

<?php echo $this->section('content') ;?>
<!-- navbar -->
<?php echo $this->include('components/navbar') ;?>
<!-- Modal print -->
<?php echo $this->include('components/modal_print.php') ;?>
<!-- dashboard -->

<div class="container" style="margin-top: 5vh;">
    <div class="row">
        <?php foreach ($selectTurmas as $turma) : ?>
        <div class="col s12 m12 l4">
            <div class="info-box grey lighten-5">
                <span class="darken-1 info-box-icon" style="background-color: #<?php echo $turma['color'] ;?>;">
                <a target="_blank" href="<?php echo base_url('/dashboard/lista-turma/' . $turma['id'] . '/' . $turma['descricao']) ;?>">
                    <i class="material-icons medium white-text">account_balance</i>
                </a>
                </span>
                <div class="info-box-content light center-align">
                    <h6 class="light"><small><?php echo $turma['descricao'] ;?></small></h6>
                    <h6 class="light info-box-number"><?php echo $turma['totalAlunos'] ;?> Matriculas</h6>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title light">Lista de Cadastro Reserva
                    <i class="material-icons small right">assignment_late</i></span>
                </div>
                <div class="card-action">
                    <?php if ($cadastroReserva) : ?>
                        <table>
                            <thead>
                                <tr>
                                    <td>Nome do Responsável</td>
                                    <td>Telefone para contato</td>
                                    <td>Observações</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cadastroReserva as $reserva) : ?>
                                    <tr>
                                        <td><?php echo $reserva['nome_beneficiario'] ;?></td>
                                        <td><?php echo $reserva['telefone_contato'] ;?></td>
                                        <td><?php echo $reserva['observacoes'] ;?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <p class="light">Ainda nao foram efetivadas reservas de matriculas.</p>
                    <?php endif ?>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php echo $this->endSection('content') ;?>