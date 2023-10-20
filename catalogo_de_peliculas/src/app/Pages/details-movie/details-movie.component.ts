import { Component } from '@angular/core';

@Component({
  selector: 'app-details-movie',
  templateUrl: './details-movie.component.html',
  styleUrls: ['./details-movie.component.css']
})
export class DetailsMovieComponent {
    id!:number;
    title!: string;
    year!: string;
    synopsis!: string;
    cover!:string;
    created_at!:Date;
    updated_at!: Date;

}
