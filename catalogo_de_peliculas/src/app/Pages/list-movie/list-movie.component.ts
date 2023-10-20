import { Component, OnInit } from '@angular/core';
import { MovieResponse, MovieService } from '../../Services/movie.service';

@Component({
  selector: 'app-list-movie',
  templateUrl: './list-movie.component.html',
  styleUrls: ['./list-movie.component.css']
})
export class ListMovieComponent implements OnInit {

  movies: any=[]; // Create an array of movies

  constructor(public ms: MovieService) {}

  moviesList!: MovieResponse[];
  
  ngOnInit(): void {
    this.getMovieList();
  }

  getMovieList() {
    this.ms.getAllMovies().subscribe((res:any)=>{
      this.moviesList = res;
      console.log(res);
      this.movies = this.moviesList;
    })
  }

  

}
