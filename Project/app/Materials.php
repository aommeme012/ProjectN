<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    protected $table= 'materials';
    protected $primaryKey= 'Material_Id';

    protected $fillable = [
        'Material_Name',
        'Material_Amount',
        'Material_Status',
    ];
}
