<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillSection extends Model
{
    use HasFactory;
     protected $table='skill_sections';
     public $timestamps = false;
     protected $fillable = ['introduction','user_id',];
}
