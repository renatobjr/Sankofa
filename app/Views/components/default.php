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
    <title>Sankofa</title>
    <style>
        .print { width: 40% !important ; height: 25% !important ; }
        .info-box {
            display: block;
            height: 90px;
            background: #fff;
            width: 100%;
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%);
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .info-box-icon {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            display: block;
            float: left;
            height: 90px;
            width: 90px;
            text-align: center;
            font-size: 45px;
            line-height: 90px;
            padding-top: 15px;
        }
        .info-box-content {
            padding: 1vh;
            margin-left: 90px;
        }
    </style>
</head>

<body>

    <!-- Layout -->
    <?php echo $this->renderSection('content') ?>

</body>
<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
    integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    M.AutoInit();
    <?php if(session()->getFlashdata('success_user')) : ?>
        M.toast({html: '<?php echo session()->getFlashdata('success_user') ?>' ,displayLength: 4000,classes:'green darken-4'});
    <?php elseif (session()->getFlashdata('error_user')) : ?>
        M.toast({html: '<?php echo session()->getFlashdata('error_user') ?>' ,displayLength: 4000,classes:'red darken-4'});
    <?php endif; ?>
    $(document).ready(function () {
        // Init selectforms
        $('select').formSelect();

        // Modal print
        <?php if (session()->getFlashdata('success')) : ?>
            $('#print_matricula').modal({
                dismissible:false
            })
            $('#print_matricula').modal('open')
        <?php endif ?>
        // Modal turma
        <?php if (session()->getFlashdata('error')) : ?>
            $('#turma_excedida').modal({
                dismissible:false
            })
            $('#turma_excedida').modal('open')
        <?php endif ?>

        // modal docs obrigatorios     
        $('#docs_obrigatorios').modal({
            dismissible: false,
            onOpenEnd: function (modal, trigger) {
                // get true or false from checkboxes
                $("input[name='docs_obrigatorios[]']").click(function () {
                    var check_docs_obrigatorios = $("input[name='docs_obrigatorios[]']")
                    var checked = 0
                    check_docs_obrigatorios.each(function () {
                        if ($(this).is(':checked')) {
                            checked++
                        }
                    })
                    checked === 7 
                        ? $('#btn_docs').removeClass('disabled') 
                        : $('#btn_docs').addClass('disabled')
                })
            }
        });
        if (document.URL.split("/").pop() == 'matricula') {
            $('#docs_obrigatorios').modal('open')
        }

        // Get CEP
        function limpa_campos_endereco() {
            $('#endereco').val("")
            $('#bairro').val("")
        }
        $('#cep').blur(function(){
            var cep = $(this).val().replace(/\D/g, '')
            if (cep != '') {
                var validaCep = /^[0-9]{8}$/

                if (validaCep.test(cep)) {
                    $('#endereco').val("...")
                    $('#bairro').val("...")

                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(data){
                        if (!("erro" in data)) {
                            $('#endereco').val(data.logradouro)
                            $('#bairro').val(data.bairro)
                        } else {
                            limpa_campos_endereco()
                            alert("CEP não encontrado.")
                            $('#endereco').removeAttr('disabled')
                            $('#bairro').removeAttr('disabled')
                        }
                    })
                } else {
                    limpa_campos_endereco()
                    alert("CEP com formato inválido.")
                }
            } else {
                limpa_campos_endereco()
            }
        })
        // Mask
        $('.date').mask('00/00/0000')
        $('.nis').mask('0.000.000.000-0')
        $('.cpf').mask('000.000.000-00')
        $('.cep').mask('00.000-000')
        $('.movel').mask('(00) 90000-0000')
        $('.real').mask('000.000.000.000.000,00', {reverse: true})
    })
</script>

</html>