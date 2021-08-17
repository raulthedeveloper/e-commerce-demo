<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hats extends Model
{
    use HasFactory;

    protected $table = 'hats';

    public $primaryKey = 'id';

    public $timestamps = true;
}
