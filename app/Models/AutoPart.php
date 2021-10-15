<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoPart extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'model_id',
      'category_id',
      'price',
      'description',
      'condition',
      'fitment_model_id'  
    ];
}