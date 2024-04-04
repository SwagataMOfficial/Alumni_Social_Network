<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'graduation_year',
        'degree',
        'student_id',
        'picture',
        'token',
        'token_expire'

    ];
}
