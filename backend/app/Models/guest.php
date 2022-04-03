<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    protected $table = 'guests';

    protected $fillable = ['name', 'email', 'description_event'];
}
