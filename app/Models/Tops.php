<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tops extends Model
{
    use HasFactory;

    protected $table = 'tops';

    public $primaryKey = 'id';

    public $timestamps = true;
}
