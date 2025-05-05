function amarelo(cor){
    document.getElementById('analisador_palavra').style.backgroundColor = cor
}

function analisePalavra(cor1, cor2, cor3, tamanhoPalavra){
    tamanhoPalavra = document.getElementById('analisador_palavra').value 
    if (tamanhoPalavra.length < 3 && tamanhoPalavra.length > 0){
        document.getElementById('analisador_palavra').style.backgroundColor = cor1

    } else if(tamanhoPalavra.length >= 3){
        document.getElementById('analisador_palavra').style.backgroundColor = cor2

    } else{
        document.getElementById('analisador_palavra').style.backgroundColor = cor3

    }
}