var num1 = prompt('Digite algum número:')
var num2 = prompt('Digite outro número:')
var num3 = prompt('Digite um número com casas decimais:')
var num4 = prompt('Digite um outro com casas decimais:')

//valores int

document.write(num1 + num2) //imprime os valores concatenados

num1 = parseInt(num1)
num2 = parseInt(num2)

document.write(num1 + num2) //imprime os valores somados

//valores float

document.write(num3 + num4) //imprime os valores concatenados

num1 = parsefloat(num3)
num2 = parseFloat(num4)

document.write(num3 + num4) //imprime os valores somados

//valores string

num1 = toString(num1)
num2 = toString(num2)

document.write(num1 + num2) //imprime os valores concatenados
