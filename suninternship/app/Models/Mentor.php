<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $fillable = ['firstName', 'lastName', 'direction', 'nombreStagiaire'];


    public function interns()
    {
        return $this->hasMany(Intern::class);
    }
}
