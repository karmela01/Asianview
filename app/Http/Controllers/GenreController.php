<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\camposGenre;
//use App\Http\Requests\UpdateGenre;

use App\Genre;
use App\Http\Requests\camposMovie;
use App\Movie;

class GenreController extends Controller
{
    public function __construct(){

        $this->middleware("auth")->only("create", "edit","destroy");
    }

    public function index()
    {
      $genreList = Genre::all();
      return view('genre/index',['genreList' =>$genreList]);
    }

    public function create()
    {
        return view('genre/form');
    }

    public function store(camposGenre $r)
    {
        $genre = new Genre;

        $genre->description = $r->description;

        $genre->save();

        return redirect()->route('genre.index');

    }

    public function show($id)
    {
        $genre = Genre::find($id);

        $movieList = Movie::all();

        return view('/genre/galeria', array('genre'=>$genre, 'movieList'=>$movieList));
    }

    public function edit($id)
    {
       $genre = Genre::find($id);
       //dd($genre);

       return view('genre/form', array('genre'=>$genre));
    }


    public function update(camposGenre $r)
    {
        $genre = Genre::find($r->id);

        $genre->fill($r->all());

        $genre->save();
        $genre->movies()->sync($r->movie);

        return redirect()->route('genre.index');
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);

        $genre->movies()->detach();
        $genre->delete();



        return redirect()->route('genre.index');
    }
}
