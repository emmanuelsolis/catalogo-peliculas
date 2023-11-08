import { Component } from '@angular/core';
import { MovieService } from 'src/app/Services/movie.service';
import { NgForm } from '@angular/forms';
import { Movie } from 'src/app/movie';
import { Router } from '@angular/router';

@Component({
  selector: 'app-add-movie',
  templateUrl: './add-movie.component.html',
  styleUrls: ['./add-movie.component.css']
})
export class AddMovieComponent {
  movies : any = [];
  constructor(private ms:MovieService, private router:Router){}

  cover!: string
  title!: string
  year!: string
  synopsis!: string

    errors: any = [];

    onSubmit(){
      this.saveMovie();
      this.router.navigate(['/']);
    }

    getMovieList() {
      this.ms.getAllMovies().subscribe((res)=>{
        this.movies = res
      })
    }

    saveMovie(){
      var inputData = {
        cover: this.cover,
        title: this.title,
        year: this.year,
        synopsis: this.synopsis
      }
      this.ms.saveMovie(inputData).subscribe({
        next: (res:any) => {
         this.router.navigate(['/movies']);
          alert('Pelicula guardada correctamente');
        },
        error: (err:any) => {
          this.errors = err;
          alert('Error al guardar la pelicula');
        }
      });
    }
    submitForm(movieForm: NgForm){
      console.log(movieForm.value)
    }

  
}