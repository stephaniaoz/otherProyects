import { Component, OnInit } from '@angular/core';
import { ActivatedRoute  } from '@angular/router';
import { HeroesService } from '../../servicios/heroes.service';

@Component({
  selector: 'app-heroe',
  templateUrl: './heroe.component.html',
  styleUrls: ['./heroe.component.css']
})
export class HeroeComponent {

  heroe:any = {};
  img: string = '';

  constructor(private ActivatedRoute: ActivatedRoute,
              private _heroesService: HeroesService) { 
    this.ActivatedRoute.params.subscribe(params => {
      console.log(params['id']);//id que se le puso en la ruta como parámetro.
      this.heroe = this._heroesService.getHeroe(params['id']);
      console.log(this.heroe);
      
      if(this.heroe.casa == 'DC'){
        this.img = 'assets/img/logodc.jpg';
      }else
        if(this.heroe.casa){
          this.img = 'assets/img/logmv.png';
        }
  
    });
  }

}
