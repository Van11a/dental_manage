<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $fillable = [
    'title',
    'content',
    'public_start_date',
    'public_end_date',
    'is_display',
    'is_deleted',
    'file_path',
  ];
}
