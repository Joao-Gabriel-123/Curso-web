let lado = 0
let altura = 0
let largura = 0
let tamanho = 0

function posicaoRand(){
    altura = window.innerHeight
    largura = window.innerWidth

    posicaoX = Math.floor(Math.random() * largura) - 90
    posicaoY = Math.floor(Math.random() * altura) - 90

    posicaoX = posicaoX < 0 ? 0 : posicaoX
	posicaoY = posicaoY < 0 ? 0 : posicaoY

    //console.log(posicaoX, posicaoY)
}

function tamanhoRand(){
    tamanho = Math.random()
    if(tamanho > 0.666666){
        return tamanho = 3
    }else if(tamanho < 0.666666 && tamanho > 0.333333){
        return tamanho = 2
    }else {
        return tamanho = 1
    }
}

function ladoRand(){
    lado = Math.round(Math.random())
}

function criaMosquito(){
    posicaoRand()
    ladoRand()
    tamanhoRand()

    let mosquito = document.createElement('img')
    mosquito.src = 'img/mosquito.png'
    mosquito.className = 'mosquito' + tamanho + ' ' + 'lado' + lado
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.onclick = function() {
		this.remove()
	}

    document.body.appendChild(mosquito)
}

