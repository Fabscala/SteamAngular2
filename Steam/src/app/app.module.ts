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
import { InfosComponent } from './infos/infos.component';

@NgModule({
  declarations: [
    AppComponent,
    TableauComponent,
    HeaderComponent,
    FooterComponent,
    BibliothequeComponent,
    InfosComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot([
      {
        path: 'biblioteque',
        component: BibliothequeComponent,
      },
      {
        path: 'infos/:id',
        component: InfosComponent,
      }
    ])

  ],
  providers: [TestService],
  bootstrap: [AppComponent]
})
export class AppModule { }
