<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    // Authorize the creation of entity 
    protected $fillable = ['title' , 'start' , 'end' , 'description' , 'all_day'] ; 
}
