<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardGame extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'players',
        'instructor',
        'box'
    ];
    //! fillable, array che contiene le caratteristiche del modello
    // public $name;
    // public $type;
    // public $players;
    // public $instructor;

    //
}
