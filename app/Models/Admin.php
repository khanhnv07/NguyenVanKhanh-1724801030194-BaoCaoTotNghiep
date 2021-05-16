<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticate;

use Illuminate\Support\Facades\DB;

class Admin extends Authenticate
{
    use HasFactory;

    protected $table = 'admins';
    protected $fillable = ['name','image','email','created_at'];
    protected $guard = 'admin';

    public static function getAdmin()
    {
        $records = DB::table('admins')->select('id','name','image','email','created_at')->get()->toArray();
        return $records;
    }

}
