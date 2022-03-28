<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = 'events';

    protected $fillable = ['description', 'event_date', 'id_guest'];
}
