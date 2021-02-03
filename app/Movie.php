<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title','year','duration','rating','cover','filename','filepath','externalurl',
    ];

    public function genres(){
        return $this->belongsToMany('App\Genre','genres_movies','movie_id','genre_id');
    }
    public function peopleAct(){
        return $this->belongsToMany('App\People', 'people_act_movies','movie_id','people_id');
    }
    public function peopleDirect(){
        return $this->belongsToMany('App\People', 'people_direct_movies', 'movie_id', 'people_id');
    }
}
