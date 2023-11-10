import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { RouterModule, Routes } from '@angular/router';
import { ListMovieComponent } from './Pages/list-movie/list-movie.component';
import { DetailsMovieComponent } from './Pages/details-movie/details-movie.component';
import { HomePageComponent } from './Pages/home-page/home-page.component';
import { AddMovieComponent } from './Pages/add-movie/add-movie.component';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { EditMovieComponent } from './Pages/edit-movie/edit-movie.component';


const routes: Routes = [
  { path: '', component: HomePageComponent, title: 'Pagina de Inicio' },
  { path: 'movies', component: ListMovieComponent, title: 'Listado de Peliculas' },
  { path: 'movies/:id', component: DetailsMovieComponent, title: 'Detalles de Pelicula' },
  { path: 'crear-pelicula', component: AddMovieComponent, title: 'Agregar Pelicula' },
  // { path: 'movies/:id/edit', component: AddMovieComponent, title: 'Editar Pelicula' },
  { path: 'movies/:id/edit', component: EditMovieComponent, title: 'Actualizar Pelicula' },
]

@NgModule({
  declarations: [
    DetailsMovieComponent,
    HomePageComponent,
    AddMovieComponent,
    ListMovieComponent,
    EditMovieComponent,
    
   
  ],
  imports: [ RouterModule.forRoot(routes), HttpClientModule, BrowserModule, FormsModule, RouterModule ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
