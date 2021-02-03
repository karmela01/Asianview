<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\camposMovie;
//use App\Http\Requests\UpdateMovie;
//use App\Http\Middleware\Authenticate;


use App\Movie;
use App\Genre;
use App\People;


class MovieController extends Controller
{

    public function __construct(){

        $this->middleware("auth")->only("create", "edit","destroy");
    }

    public function index()
    {
        $movieList = Movie::all()->sortByDesc('year');
        $genreList = Genre::all();
        return view('movie/index', ['movieList' => $movieList, 'genreList' => $genreList]);

    }
    /*
    public function search($searchString)
    {
        $movieList = DB::raw("xxxxx");

        $movieList = Movie::all()->join('people_act_movies')->on(xxx)->join('people')->where('name', 'like', "%$searchString%")->get();
        $genreList = Genre::all();
        return view('movie/index', ['movieList' => $movieList, 'genreList' => $genreList]);
        //  return view('movie/one2', ['movieList' => $movieList]);
    }

*/
    public function create()
    {
        $genreList = Genre::all();
        $peopleList = People::all();

        return view('movie/form', ['genreList' => $genreList], ['peopleList' => $peopleList]);
    }

    public function store(camposMovie $r)
    {
        $movie = new Movie($r->all());

        if ($imagen = $r->file('cover')) {

            $nombreImagen = $imagen->getClientOriginalName();

            $imagen->move('images', $nombreImagen);

            $movie->cover = $nombreImagen;
        }
        $movie->save();
        $movie->genres()->attach($r->genre);
        $movie->peopleAct()->attach($r->cast);
        $movie->peopleDirect()->attach($r->direction);

        return redirect()->route('movie.index');
    }
    public function show($id)
    {
        $movie = Movie::find($id);
        // dd($movie);
        $genreList = Genre::all();
        $peopleList = People::all();

        return view('movie/one', array('movie' => $movie, 'genreList' => $genreList, 'peopleList' => $peopleList));
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        //dd($movie);
        $genreList = Genre::all();
        $peopleList = People::all();

        return view('movie/form', array('movie' => $movie, 'genreList' => $genreList, 'peopleList' => $peopleList));
    }
    public function update(camposMovie $r)
    {
        $movie = Movie::find($r->id);
        $movie->fill($r->all());


        if ($imagen = $r->file('cover')) {

            $nombreImagen = $imagen->getClientOriginalName();


            $imagen->move('images', $nombreImagen);

            $movie->cover = $nombreImagen;
        }
        $movie->save();
        $movie->genres()->sync($r->genre);
        $movie->peopleAct()->sync($r->cast);
        $movie->peopleDirect()->sync($r->direction);

        return redirect()->route('movie.index');
    }
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->genres()->detach();
        $movie->peopleAct()->detach();
        $movie->peopleDirect()->detach();
        $movie->delete();


        return redirect()->route('movie.index');
    }
}
