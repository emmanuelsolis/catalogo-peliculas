import { NgForm } from '@angular/forms';
import { Component, OnInit } from '@angular/core';
import { MovieService } from './../../Services/movie.service';
import { ActivatedRoute, Router } from '@angular/router';
@Component({
  selector: 'app-edit-movie',
  templateUrl: './edit-movie.component.html',
  styleUrls: ['./edit-movie.component.css']
})
export class EditMovieComponent {
  movieId!: any;
  movie: any = {};
  movies: any = [];

  constructor(public ms: MovieService, private route: ActivatedRoute, private router:Router) {}

  ngOnInit(){
    //get movie details from service
    this.movieId = this.route.snapshot.paramMap.get('id');
  }
  ngOnSubmit(){
    this.ms.updateMovie(this.movieId, this.movie).subscribe(res => {
      this.movie = res;
      console.log(this.movie);
      alert("Movie actualizada correctamente");
    })
  }
  updateMovie(){
    var inputData = {
      cover: this.ms.selectedMovie.cover,
      title: this.ms.selectedMovie.title,
      year: this.ms.selectedMovie.year,
      synopsis: this.ms.selectedMovie.synopsis
    }
    this.ms.updateMovie(inputData, this.movieId).subscribe({
      next: (res:any) => {
        this.router.navigate(['/movies']);
        alert('Pelicula actualizada correctamente');
      }, 
      error: (err: Error) => {
        console.log(err);
        alert('Error al actualizar la pelicula');
      }
    });
  }
  ListAllMovies(){
      this.ms.getAllMovies().subscribe((res)=>{
      this.movies = res
     })
  
    }
    submitForm(movieForm: NgForm){
      console.log(movieForm.value)
    }
  
}
