
/*
//operador lógico && (e)

    //true && true = true
    if (4 > 2 && 2 == 2){
        document.write("Verdadeiro")
    } else{
        document.write("Falso")
    }

    //true && false = false
    if (4 > 2 && 2 != 2){
        document.write("Verdadeiro")
    } else{
        document.write("Falso")
    }

//operador lógico || (ou)

    //true || true = true
    if (4 > 2 && 2 == 2){
        document.write("Verdadeiro")
    } else{
        document.write("Falso")
    }

    //true || false = true
    if (4 > 2 && 2 != 2){
        document.write("Verdadeiro")
    } else{
        document.write("Falso")
    }

    //false || false = false
    if (4 < 2 && 2 != 2){
        document.write("Verdadeiro")
    } else{
        document.write("Falso")
    }

//operador lógico ! (negação)

    //true = false
    if (!(4 > 2 )){
        document.write("Verdadeiro")
    } else{
        document.write("Falso")
    }

    //false = true
    if (!(4 < 2 )){
        document.write("Verdadeiro")
    } else{
        document.write("Falso")
    }
*/

//prática

var nota = prompt('Digite a nota do aluno:')
var faltas = prompt('Digite a quantidade de faltas:')

var media = 7
var faltas_maximas = 15

if (nota >= media && faltas <= faltas_maximas) {
  document.write('Aprovado')

} else { 
  document.write('Reprovado')

}

//operador ternário

/*
var resultado = (nota >= media && faltas <= faltas_maximas) ? 'aprovado' : 'reprovado'
document.write(resultado)
*/