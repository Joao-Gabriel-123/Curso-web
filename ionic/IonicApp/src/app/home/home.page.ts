import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { NavController,} from '@ionic/angular/standalone';


@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
  standalone: false,
})

export class HomePage implements OnInit {
  constructor(private navegacao: NavController) {


  }

  ngOnInit() {
  }

  public pesquisa: string = ''

  public resultado: string = ''

  public titulo: string = 'Meu primeiro app'

  public img_campo: string = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzz9TftWwu5jAfStGAEoTD2yHRV7ErloOTVA&s'

  public img_pao: string = '../assets/img/Pão.jpg'

  public atualiza(): void{
    this.titulo = 'Texto alterado'
  }

  public acao(): void{
    this.titulo = 'Botão pressionado'
  }

  public recuperar(): void{
    this.resultado = this.pesquisa
  }

  AbrirBotoes(){
    this.navegacao.navigateForward('botoes')
  }

  AbrirLista(){
    this.navegacao.navigateForward('lista')
  }

}