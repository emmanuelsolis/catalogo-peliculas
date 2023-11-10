import { Component, OnInit } from '@angular/core';
import { MovieResponse, MovieService } from '../../Services/movie.service';
import { Router, ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-list-movie',
  templateUrl: './list-movie.component.html',
  styleUrls: ['./list-movie.component.css']
})
export class ListMovieComponent implements OnInit {

  movies: any=[]; // Create an array of movies
  constructor(public ms: MovieService, private router: Router, private route: ActivatedRoute) {}


  ngOnInit(): void {
    this.route.params.subscribe((params) => {
      console.log('params', params)
    })
 
    this.getMovieList();
  }

  getMovieList() {
    this.ms.getAllMovies().subscribe((res)=>{
      this.movies = res
    })
  }
  onDelete(id:number){
    this.ms.deleteMovie(id).subscribe((res)=>{
      this.getMovieList();
      alert( "Movie Deleted Successfully!" );

    })
  }
  onEdit(movie: MovieResponse){
    alert(movie.title)
    if(movie.id !== null){
      this.ms.selectedMovie = Object.assign({}, movie);
      this.router.navigate([`/movies/${movie.id}/edit`]);
    }
  }
 
}
