import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { RouterModule, Routes } from '@angular/router';
import { BrowserModule } from '@angular/platform-browser';
import { AppComponent } from './app.component';
import { ListMovieComponent } from './Pages/list-movie/list-movie.component';
import { DetailsMovieComponent } from './Pages/details-movie/details-movie.component';
import { HomePageComponent } from './Pages/home-page/home-page.component';
import { NavbarComponent } from './Pages/Partials/navbar/navbar.component';

const routes: Routes = [
  {path: '', component: HomePageComponent, title: 'Pagina de Inicio'},
  {path: 'movies', component: ListMovieComponent, title: 'Listado de Peliculas'},
  {path: 'movies/:id', component: DetailsMovieComponent, title: 'Detalles de Pelicula'}
]
@NgModule({
  declarations: [
    AppComponent,
    ListMovieComponent,
    DetailsMovieComponent,
    HomePageComponent,
    NavbarComponent
  ],
  imports: [
    BrowserModule, RouterModule.forRoot(routes), HttpClientModule
  ],
  exports: [RouterModule],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
