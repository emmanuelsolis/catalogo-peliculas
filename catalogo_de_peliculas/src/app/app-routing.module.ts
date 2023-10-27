import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';
import { ListMovieComponent } from './Pages/list-movie/list-movie.component';
import { DetailsMovieComponent } from './Pages/details-movie/details-movie.component';
import { HomePageComponent } from './Pages/home-page/home-page.component';
import { FooterComponent } from './Pages/Partials/footer/footer.component';


const routes: Routes = [
  { path: '', component: HomePageComponent, title: 'Pagina de Inicio' },
  { path: 'movies', component: ListMovieComponent, title: 'Listado de Peliculas' },
  { path: 'movies/:id', component: DetailsMovieComponent, title: 'Detalles de Pelicula' }
]

@NgModule({
  declarations: [
    ListMovieComponent,
    DetailsMovieComponent,
    HomePageComponent,
    FooterComponent
   
  ],
  imports: [
    RouterModule, RouterModule.forRoot(routes), BrowserModule, HttpClientModule
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
