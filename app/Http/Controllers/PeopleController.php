<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\camposPeople;
use App\People;
use App\Movie;

class PeopleController extends Controller
{
    public function __construct(){

        $this->middleware("auth")->only("create", "edit","destroy");
    }

    public function index()
    {
        $peopleList = People::all();
        return view('people/index', ['peopleList'=>$peopleList]);
    }

    public function create()
    {
        return view('people/form');
    }


    public function store(camposPeople $r)
    {
       $people = new People($r->all());


       if($imagen = $r->file('photo')){

            $nombreImagen = $imagen->getClientOriginalName();

            $imagen->move('imagesPeople', $nombreImagen);

            $people->photo = $nombreImagen;

    }


        $people->save();
        return redirect()->route('people.index');
    }


    public function show($id)
    {
        $people = People::find($id);
        dd($people);
        $movieList = Movie::all();

        return view('/people/galeriaActores', array('people'=>$people, 'movieList'=>$movieList));
    }

    public function edit($id)
    {
        $people = People::find($id);
        //dd($people);
        return view('people/form', array('people'=>$people));


    }


    public function update(camposPeople $r)
    {
       $people = People::find($r->id);
       $people->fill($r->all());


       if($imagen = $r->file('photo')){

        $nombreImagen = $imagen->getClientOriginalName();

        $imagen->move('imagesPeople', $nombreImagen);

        $people->photo = $nombreImagen;

        }
        $people->save();

        return redirect()->route('people.index');

    }


    public function destroy($id)
    {
        $people = People::find($id);
        $people->delete();
        return redirect()->route('people.index');
    }
}
