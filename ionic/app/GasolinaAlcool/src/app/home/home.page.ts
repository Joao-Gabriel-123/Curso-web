import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
  standalone: false,
})
export class HomePage {

  constructor() { }

  public PrecoAlcool: string = ''

  public PrecoGasolina: string = ''

  public Resultado: string = 'Resultado'

  Calcular() {

    if (this.PrecoAlcool != '' && this.PrecoGasolina != '') {

      var pAlcool = parseFloat(this.PrecoAlcool)
      var pGasolina = parseFloat(this.PrecoGasolina)

      if ((pAlcool / pGasolina) >= 0.7) {

        this.Resultado = 'Melhor utilizar a gasolina!'

      } else {

        this.Resultado = 'Melhor utilizar o álcool!'

      }

    } else {
      this.Resultado = 'Preencha os campos acima!'

    }

  }

}
