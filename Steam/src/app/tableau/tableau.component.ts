import { Component, OnInit } from '@angular/core';

import { TestService } from '../test.service';

@Component({
  selector: 'app-tableau',
  templateUrl: './tableau.component.html',
  styleUrls: ['./tableau.component.css']
})
export class TableauComponent {

  constructor(private testService: TestService) { 
  	
  }
  jeux = this.testService.getJeux;

}
