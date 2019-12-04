<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Searchable\SearchableTrait;

class Pasport extends Model
{
    use Notifiable;
    //use SearchableTrait;
    use SoftDeletes;
    protected $dates=['deleted_at'];

    protected $Searchable=[
    	'columns'=>
    	[ 
    	'pasports.id'=>10,
    	'pasports.nom'=>10,
    	'pasports.prenom'=>10,
    	'pasports.Num_Pasport'=>10,
    	'pasports.email'=>10
         ]
    ];
    protected $fillable=[
    	'id','nom','prenom','Num_Pasport','email',];
}
