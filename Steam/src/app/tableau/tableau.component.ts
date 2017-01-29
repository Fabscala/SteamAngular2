import { Component, OnInit } from '@angular/core';
import { TestService } from '../test.service';

@Component({
  selector: 'app-tableau',
  templateUrl: './tableau.component.html',
  styleUrls: ['./tableau.component.css']
})
export class TableauComponent implements OnInit {

	jeux;

  constructor(private testService: TestService) { 
  	
  }
  

  ngOnInit() {
  	this.jeux = this.testService.getJeux;
  }

}
