<?php

namespace Mrmohsin\Crudpackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'email',
        'country',
        'number',
    ];
}
