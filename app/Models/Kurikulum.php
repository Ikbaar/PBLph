<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    protected $fillable = ['kode', 'mata_kuliah', 'sks', 'semester'];
}
