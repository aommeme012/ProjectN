<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table= 'admins';
    protected $primaryKey= 'admin_id';

    protected $fillable = [
        'admin_fname',
        'admin_lname',
        'admin_phone',
        'admin_username',
        'admin_password',
    ];
}
