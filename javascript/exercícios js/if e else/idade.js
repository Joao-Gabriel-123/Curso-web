//variáveis

var idade = prompt('Digite a idade:')

//prática

if (idade >= 0 && idade < 15){
    alert('Criança')

} else if (idade >= 15 && idade < 30){
    alert('Jovem')

} else if (idade >= 30 && idade < 60){
    alert('Adulto')
    
} else {
    alert('Idoso')
    
}