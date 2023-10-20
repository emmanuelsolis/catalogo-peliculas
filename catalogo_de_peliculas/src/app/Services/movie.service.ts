import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Movie } from '../movie';

export interface MovieResponse {
  id: number
  cover: string
  title: string
  year: string
  synopsis: string
  created_at: Date  
  updated_at: Date

}
@Injectable({
  providedIn: 'root'
})
export class MovieService {

  url='http://localhost:8000/api/movies'

  constructor(private httpClient: HttpClient ) { }

  getAllMovies() {
    return this.httpClient.get(this.url);
  }
}
