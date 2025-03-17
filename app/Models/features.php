<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class features extends Model
{
    protected $fillable = ['feature_id', 'feature_name','feature_desc'];

}
