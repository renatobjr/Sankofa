<?php session()->getFlashdata('success') ;?>
<div id="print_matricula" class="modal modal-fixed-footer print">
    <div class="modal-content">
        <h5>Matrícula realizada com sucesso!</h5>
        <p>Para imprimir a ficha de matrícula e o comprovante clique em 'Finalizar Matrícula'</p>
    </div>
    <div class="modal-footer">
        <a href="/dashboard/matricula/comprovante_matricula/<?php echo session()->getFlashdata('success') ;?>" target="_blank" id="btn_docs" class="modal-close btn waves-effect waves-light green">Finalizar Matrícula</a>
    </div>
</div>