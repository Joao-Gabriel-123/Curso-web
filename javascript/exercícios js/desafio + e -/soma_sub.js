//variaveis

var num1 = parseFloat(prompt('Digite um número:'))
var operacao = prompt('Escolha a operação a ser feita: soma ou subtração')
var num2 = parseFloat(prompt('Digite outro número:'))
var resultado

//execução

function main(){
    calculo(num1, num2, operacao)
    document.write(resultado)
}

function calculo(num1, num2, operacao){
    if (operacao == 'soma'){
        resultado = num1 + num2
        resultado ='O resultado é: ' + resultado
        return resultado

    } else if (operacao == 'subtração'){
        resultado = num1 - num2
        resultado ='O resultado é: ' + resultado
        return resultado
        
    } else {
        resultado = 'A operação é inválida!'
        return resultado
        
    }
}

main()


