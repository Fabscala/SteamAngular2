import { Component, OnInit } from '@angular/core';

import { TestService } from '../test.service';

@Component({
  selector: 'app-top-jeux',
  templateUrl: './top-jeux.component.html',
  styleUrls: ['./top-jeux.component.css']
})
export class TopJeuxComponent {

 
  constructor(private testService: TestService) { }

  jeux = this.testService.getJeux;
  ngOnInit() {
    this.jeux = this.testService.getTopGames();
  }

}
