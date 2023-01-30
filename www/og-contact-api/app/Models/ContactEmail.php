<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactEmail extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'name',
        'company',
        'email',
        'phone',
        'message'
    ];
}
