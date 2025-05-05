let jogador_atual = ''

function IniciarJogo() {

    let jogador1 = document.getElementById('jogador1').value
    let jogador2 = document.getElementById('jogador2').value

    if (jogador1 != '' && jogador2 != '') {
        document.getElementById('tabuleiro').style.visibility = 'visible'
        document.getElementById('mensagem').innerHTML = `${jogador1} começa!`

    } else {
        alert('Insira o nome dos jogadores!')
    }

}

function MarcarLocal(id) {

    if (jogador_atual == '') {
        jogador_atual = jogador1
    }

    if (jogador_atual == jogador1) {

        document.getElementById(`campo${id}`).innerText = 'X'
        document.getElementById(`campo${id}`).className = "campo"
        document.getElementById(`campo${id}`).setAttribute = 'disabled'
        document.getElementById(`campo${id}`).onclick = ''

        jogador_atual = jogador2

        document.getElementById('mensagem').innerHTML = `Agora é a vez de ${jogador_atual.value}!`

    } else if (jogador_atual == jogador2) {

        document.getElementById(`campo${id}`).innerText = 'O'
        document.getElementById(`campo${id}`).className = "campo"
        document.getElementById(`campo${id}`).setAttribute = 'disabled'
        document.getElementById(`campo${id}`).onclick = ''

        jogador_atual = jogador1

        document.getElementById('mensagem').innerHTML = `Agora é a vez de ${jogador_atual.value}!`

    }

    VerificaGanhador()
}

function VerificaGanhador() {
    if ((document.getElementById('campo1').innerText == 'X' && document.getElementById('campo4').innerText == 'X' && document.getElementById('campo7').innerText == 'X') || (document.getElementById('campo2').innerText == 'X' && document.getElementById('campo5').innerText == 'X' && document.getElementById('campo8').innerText == 'X') || (document.getElementById('campo3').innerText == 'X' && document.getElementById('campo6').innerText == 'X' && document.getElementById('campo9').innerText == 'X') || (document.getElementById('campo1').innerText == 'X' && document.getElementById('campo2').innerText == 'X' && document.getElementById('campo3').innerText == 'X') || (document.getElementById('campo4').innerText == 'X' && document.getElementById('campo5').innerText == 'X' && document.getElementById('campo6').innerText == 'X') || (document.getElementById('campo7').innerText == 'X' && document.getElementById('campo8').innerText == 'X' && document.getElementById('campo9').innerText == 'X') || (document.getElementById('campo1').innerText == 'X' && document.getElementById('campo5').innerText == 'X' && document.getElementById('campo9').innerText == 'X') || (document.getElementById('campo3').innerText == 'X' && document.getElementById('campo5').innerText == 'X' && document.getElementById('campo7').innerText == 'X')) {
        alert(jogador1.value + ' venceu!')
        window.location.reload()
        
        return
    }

    if ((document.getElementById('campo1').innerText == 'O' && document.getElementById('campo4').innerText == 'O' && document.getElementById('campo7').innerText == 'O') || (document.getElementById('campo2').innerText == 'O' && document.getElementById('campo5').innerText == 'O' && document.getElementById('campo8').innerText == 'O') || (document.getElementById('campo3').innerText == 'O' && document.getElementById('campo6').innerText == 'O' && document.getElementById('campo9').innerText == 'O') || (document.getElementById('campo1').innerText == 'O' && document.getElementById('campo2').innerText == 'O' && document.getElementById('campo3').innerText == 'O') || (document.getElementById('campo4').innerText == 'O' && document.getElementById('campo5').innerText == 'O' && document.getElementById('campo6').innerText == 'O') || (document.getElementById('campo7').innerText == 'O' && document.getElementById('campo8').innerText == 'O' && document.getElementById('campo9').innerText == 'O') || (document.getElementById('campo1').innerText == 'O' && document.getElementById('campo5').innerText == 'O' && document.getElementById('campo9').innerText == 'O') || (document.getElementById('campo3').innerText == 'O' && document.getElementById('campo5').innerText == 'O' && document.getElementById('campo7').innerText == 'O')) {
        alert(jogador2.value + ' venceu!')
        window.location.reload()

        return
    }

    if (document.getElementById('campo1').innerText != '' && document.getElementById('campo2').innerText != '' && document.getElementById('campo3').innerText != '' && document.getElementById('campo4').innerText != '' && document.getElementById('campo5').innerText != '' && document.getElementById('campo6').innerText != '' && document.getElementById('campo7').innerText != '' && document.getElementById('campo8').innerText != '' && document.getElementById('campo9').innerText != '') {
        alert('O jogo empatou!')
        window.location.reload()

        return
    }


}