<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;
    protected $table= 'about_sections';
    public $timestamps = false;

    protected $fillable = [
        'user_id'
    ];
}
