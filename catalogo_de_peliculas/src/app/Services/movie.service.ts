import { HttpClient, HttpHeaders } from '@angular/common/http';
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
 
export interface MovieResponseType {
  status: Number,
  movies: MovieResponse[]
}
@Injectable({
  providedIn: 'root'
})
export class MovieService {

  url='http://localhost:8000/api'
  reqHeader = new HttpHeaders({
    'Content-Type': 'application/json'
  });

  constructor(private http: HttpClient ) { }

  getAllMovies() {
    return this.http.get<MovieResponseType>(this.url + '/movies');
  }
  getOneMovie(id: number): Observable<MovieResponse> {
    const movieUrl=`${this.url}/movies/${id}`;
    console.log('este es el url',movieUrl)
    return this.http.get<MovieResponse>(movieUrl);
  }
  saveMovie(inputData:Movie): Observable<MovieResponse> {
    console.log('este es el inputData',inputData)
    return this.http.post<MovieResponse>(`${this.url}/crear-pelicula`, inputData, {headers: this.reqHeader});
  }
  updateMovie(id: number, inputData: Movie) {
    return this.http.put(`${this.url}/movies/${id}`, inputData, { headers: this.reqHeader});
  }
  deleteMovie(id: number) {
    return this.http.delete(`${this.url}/movies/${id}`);
  }

}
