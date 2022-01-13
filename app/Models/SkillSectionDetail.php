<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillSectionDetail extends Model
{
    use HasFactory;
    protected $table='skill_section_details';
    public $timestamps = false;

    public $fillable = [
        'skill_name',
        'skill_volume',
        'user_id',
    ];
}
