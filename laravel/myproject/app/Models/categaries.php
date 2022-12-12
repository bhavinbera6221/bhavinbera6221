<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categaries extends Model
{
    use HasFactory;
    protected $table="categories";   
    protected $primaryKey="category_id";
//     protected $sd="category_title";
//     protected $sdd="category_description";
}

