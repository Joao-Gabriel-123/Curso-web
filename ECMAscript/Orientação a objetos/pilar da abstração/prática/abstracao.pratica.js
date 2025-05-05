class Sofa {
    constructor(cor, retratil, qtde_lugares){
        this.cor = cor
        this.retratil = retratil
        this.qtde_lugares = qtde_lugares

    }

    retrairSofa(){
        if (this.retratil === true) {
            console.log('Retraiu')

        } else {
            console.log('Sofá não é retrátil')

        }

    }

}

sofás = Array()

sofás.push(new Sofa('marrom', true, 3))
sofás.push(new Sofa('vermelho', false, 2))

sofás[0].retrairSofa()
sofás[1].retrairSofa()