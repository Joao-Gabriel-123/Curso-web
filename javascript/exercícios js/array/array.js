//variaveis

var objetos = Array('Cadeira', 'Impressora', 'Garfo')

//execução

function adicionarMovel(movel){
    movel = document.getElementById('campoMoveis').value

    if (movel == ''){
        alert('Informe um valor válido')

    }else{
        if(objetos.indexOf(movel) == -1){
            objetos.push(movel)
            console.log(objetos)
            document.getElementById('campoMoveis').value = ''
        }else{
            alert('Objeto já foi adicionado')

        }

    }
}

function ordenarMoveis(){
    objetos.sort()
    console.log(objetos)
}