import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { ProfileComponent } from './view/profile/profile.component';
import { CardComponent } from './view/card/card.component';
import { CardDownComponent } from './view/card-down/card-down.component';
import { TableComponent } from './view/table/table.component';


@NgModule({
  declarations: [
    AppComponent,
    ProfileComponent,
    CardComponent,
    CardDownComponent,
    TableComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    NgbModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
