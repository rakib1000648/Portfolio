<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSection extends Model
{
    use HasFactory;

    protected $table= 'contact_sections';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'action',
        'bookmark',
        'trash',
    ];
}
