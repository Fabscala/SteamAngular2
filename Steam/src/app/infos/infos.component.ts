import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { TestService } from '../test.service';
import { Jeux } from './jeux.model';

@Component({
  selector: 'app-infos',
  templateUrl: './infos.component.html',
  styleUrls: ['./infos.component.css']
})
export class InfosComponent implements OnInit {

	jeu;
	id;
	jeux;
	genres = Array();

  private sub: any;      // -> Subscriber
	
  constructor(private route: ActivatedRoute, private testService: TestService) { 

  }

ngOnInit() {
    // get URL parameters
    this.sub = this.route
        .params
        .subscribe(params => {
            // Récupération des valeurs de l'URL
            this.id = params['id']; // --> Name must match wanted paramter
    });
 
  	this.jeu = this.testService.getJeu(this.id);
  	// for (var genre in this.jeux.genre[0]) {
  	// 	this.genres.push(this.testService.getGenreName(genre));
  		
  	// }
  	this.jeux = new Jeux(this.id, this.jeu.name, this.jeu.summary, this.jeu.screenshots, this.jeu.cover, null);
  	console.log(this.genres);

}

}
