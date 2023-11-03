import { Component } from '@angular/core';
import { MovieService } from 'src/app/Services/movie.service';
import { NgForm } from '@angular/forms';
import { Movie } from 'src/app/movie';

@Component({
  selector: 'app-add-movie',
  templateUrl: './add-movie.component.html',
  styleUrls: ['./add-movie.component.css']
})
export class AddMovieComponent {
  
  constructor(private ms:MovieService){}

  cover!: string
  title!: string
  year!: string
  synopsis!: string

    errors: any = [];

       saveMovie(){
      var inputData = {
        cover: this.cover,
        title: this.title,
        year: this.year,
        synopsis: this.synopsis
      }
      this.ms.saveMovie(inputData).subscribe({
        next: (res:any) => {
          console.log('respuesta:', res);
          alert('Pelicula guardada exitosamente');
        },
        error: (err:any) => {
          this.errors = err.error.errors;
          alert('Error al guardar la pelicula');
          console.log('Error:', err.error.errors);
        }
      });
    }

  
}