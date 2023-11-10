import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { RouterModule, Routes } from '@angular/router';
import { BrowserModule } from '@angular/platform-browser';
import { AppComponent } from './app.component';
import { NavbarComponent } from './Pages/Partials/navbar/navbar.component';
import { FooterComponent } from './Pages/Partials/footer/footer.component';
import { AppRoutingModule } from './app-routing.module';


const routes: Routes = [ ] 
@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent, 
    FooterComponent, 
  ],
  imports: [
    BrowserModule,  HttpClientModule,  AppRoutingModule
  ],
  exports: [RouterModule],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
