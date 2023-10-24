import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { MovieService, MovieResponse, MovieResponseType } from '../../Services/movie.service';

@Component({
  selector: 'app-details-movie',
  templateUrl: './details-movie.component.html',
  styleUrls: ['./details-movie.component.css']
})
export class DetailsMovieComponent  implements OnInit{
    id:number=0;
    title: string='';
    year: string='';
    synopsis: string='';
    cover:string='';


    movie: any = {}; // Create an object of movie

  constructor( public ms: MovieService, private route: ActivatedRoute) {}

  ngOnInit(): void {
    this.route.params.subscribe((params) => {
      this.id = params['id'];
      console.log('este es el params', params)
    })
    
    this.getMovieById(this.id);
  }

  getMovieById(id:number){
    return this.ms.getOneMovie(id).subscribe(res => {
      console.log(res)
      return this.movie=res;

    });
  }

  

}

