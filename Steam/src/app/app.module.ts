import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule } from '@angular/router';

import { TestService } from './test.service';

import { AppComponent } from './app.component';
import { TableauComponent } from './tableau/tableau.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { BibliothequeComponent } from './bibliotheque/bibliotheque.component';
import { TopJeuxComponent } from './top-jeux/top-jeux.component';

@NgModule({
  declarations: [
    AppComponent,
    TableauComponent,
    HeaderComponent,
    FooterComponent,
    BibliothequeComponent,
    TopJeuxComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot([
      {
        path: 'library',
        component: BibliothequeComponent,
      }
    ])

  ],
  providers: [TestService],
  bootstrap: [AppComponent]
})
export class AppModule { }
