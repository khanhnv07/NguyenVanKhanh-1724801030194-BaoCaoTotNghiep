<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Support\Facades\Session;
use App\Models\WorkList;


class Employee extends Authenticate
{
    use HasFactory;
    

    protected $table = 'employees';
    protected $fillable = ['name','image','email','created_at'];
    protected $guard = 'employee';

    
}
