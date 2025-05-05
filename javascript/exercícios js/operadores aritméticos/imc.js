//inputs

nome = prompt('Digite seu nome:')
altura = prompt('Digite sua altura:')
peso = prompt('Digite seu peso:')

//cálculos

altura = parseFloat(altura)
peso = parseFloat(peso)

altura = altura / 100

m = peso / (altura * altura)

//execução

if (m < 16){
    alert(Nome + 'possui índice de massa corporal igual a' + m + ', sendo classificado como: Baixo peso muito grave' )

} else if (m >= 16 && m <= 16,99 ){
    alert(Nome + 'possui índice de massa corporal igual a' + m + ', sendo classificado como: Baixo peso grave' )

} else if (m >= 17 && m <= 18,49){
    alert(Nome + 'possui índice de massa corporal igual a' + m + ', sendo classificado como: Baixo peso' )

} else if (m >= 18,50 && m <= 24,99){
    alert(Nome + 'possui índice de massa corporal igual a' + m + ', sendo classificado como: Peso normal' )

} else if (m >= 25 && m <= 29,99){
    alert(Nome + 'possui índice de massa corporal igual a' + m + ', sendo classificado como: Sobrepeso' )

} else if (m >= 30 && m <= 34,99){
    alert(Nome + 'possui índice de massa corporal igual a' + m + ', sendo classificado como: Obesidade grau |' )

} else if (m >= 35 && m <= 39,99){
    alert(Nome + 'possui índice de massa corporal igual a' + m + ', sendo classificado como: Obesidade grau ||' )

} else {
    alert(Nome + 'possui índice de massa corporal igual a' + m + ', sendo classificado como: Obesidade grau |||' )

} 