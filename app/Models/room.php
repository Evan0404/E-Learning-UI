<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_class',
        'background_photo',
        'code_class',
        'user_id_created'
    ];
}
