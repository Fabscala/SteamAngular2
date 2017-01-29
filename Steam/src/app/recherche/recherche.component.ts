import { Component, OnInit } from '@angular/core';
import { TestService } from '../test.service';
@Component({
  selector: 'app-recherche',
  templateUrl: './recherche.component.html',
  styleUrls: ['./recherche.component.css']
})
export class RechercheComponent implements OnInit {

	jeux;

  constructor(private testService: TestService) { 
  	
  }
  

  ngOnInit() {
  	this.jeux = this.testService.getJeux;
  }

}
