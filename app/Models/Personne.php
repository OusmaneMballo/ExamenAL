<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $table = 'personne';
    public $timestamps = false;

    protected $fillable=array('nom_prenom','order');

    public static $rules=array('nom_prenom'=>'required|max:100','order'=>'required|max:30');

    public function parent()
    {
        return $this->belongsTo('App\Model\Person')->withDefault();
    }

    public function enfant()
    {
        return $this->hasMany(self::class, 'parent_id');
    }


}
