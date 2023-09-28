<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Movie::factory()->count(10)->create();
                $movie = new  Movie();
                $movie->title= 'Titanic';
                $movie->synopsis= "Un joven pobre se enamora de una pasajera rica en el Titanic durante su fatídico viaje inaugural.";
                $movie->year= 1997;
                $movie->cover= "https://example.com/titanic.jpg";

                $movie->save();

                $movie2 = new  Movie();
                $movie2->title= 'Avatar';
                $movie2->synopsis= "En un lejano planeta, un marine parapléjico se involucra en un conflicto entre humanos y nativos alienígenas.";
                $movie2->year= 2009;
                $movie2->cover= "https://example.com/avatar.jpg";
                $movie2->save();

                $movie3 = new  Movie();
                $movie3->title= 'The Godfather';
                $movie3->synopsis= "El jefe de una familia mafiosa transfiere los negocios a su hijo menor";
                $movie3->year= 1972;
                $movie3->cover= "https://example.com/godfather.jpg";
                // Save the movie
                $movie3->save();
                // Create more movies
               $movie4 = new Movie();
               $movie4->title = 'Inception';
               $movie4->synopsis = 'A thief who steals corporate secrets through the use of dream-sharing technology is offered a way to have his criminal history erased as payment for the implantation of another person\'s idea into a target\'s sub
               conscious.';
               $movie4->year = 2010;
               $movie4->cover = 'https://example.com/inception.jpg';
               // Save the movie
               $movie4->save();
               // Create more movies
                $movie5 = new Movie();
                $movie5->title = 'Interstellar';
                $movie5->synopsis = "A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.";
                $movie5->year = 2014;
                $movie5->cover = 'https://example.com/interstellar.jpg';  
                $movie5->save();
                        
                $movie6 = new Movie();
                $movie6->title = 'The Dark Knight';
                $movie6->synopsis = 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.';
                $movie6->year = 2008;
                $movie6->cover = 'https://example.com/darkknight.jpg';
                $movie6->save();

                $movie7 = new Movie();
                $movie7->title = 'Pulp Fiction';
                $movie7->synopsis = "The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.";
                $movie7->year = 1994;
                $movie7->cover = 'https://example.com/pulpfiction.jpg';
                // Save the movie
                $movie7->save();

                $movie8 = new Movie();
                $movie8->title = 'The Shawshank Redemption';
                $movie8->synopsis = "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.";
                $movie8->year = 1994;
                $movie8->cover = 'https://example.com/shawshank.jpg';
                $movie8->save();

                $movie9 = new Movie();
                $movie9->title = 'Forrest Gump';
                $movie9->synopsis = 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of Forrest Gump, an Alabama man with an IQ of 75, who witnesses and
                inadvertently influences many major events in the 20th century in his unpredictable journey through life.';
                $movie9->year = 1994;
                $movie9->cover = 'https://example.com/forrestgump.jpg';
                $movie9->save();

                $movie10 = new Movie();
                $movie10->title = 'The Lord of the Rings: The Return of the King';
                $movie10->synopsis = "Gandalf and Aragorn lead the World of Men against Sauron's army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.";
                $movie10->year = 2003;
                $movie10->cover = 'https://example.com/returnoftheking.jpg';
                $movie10->save();




            }
        }
