<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table ='guru';
    protected $fillable = ['id','nama','jabatan'];
}
