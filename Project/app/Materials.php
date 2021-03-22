<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    protected $table= 'materials';
    protected $primaryKey= 'Material_Id';

    protected $fillable = [
        'idmat',
        'Material_Name',
        'Material_Amount',
        'unitmaterial',
        'Material_Status',
    ];
}
