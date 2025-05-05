<?php

    function sendMail($destinatarios = '', $cc = '', $assunto = '', $mensagem = ''){
        echo "Destinatários: $destinatarios";
        echo "CC: $cc";
        echo "Assunto: $assunto";
        echo "Mensagem: $mensagem";
    }

    sendMail(
        destinatarios: 'maicon@teste.com',
        cc: '',
        assunto: 'Demissão de funcionários',
        mensagem: '40 funcionários serão demitidos'
    )



?>