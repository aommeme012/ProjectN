<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table= 'departments';
    protected $primaryKey= 'Dep_Id';

    protected $fillable = [
        'Dep_Name',
        'Dep_Status',
    ];
}
