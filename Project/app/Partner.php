<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table= 'partners';
    protected $primaryKey= 'Partner_Id';

    protected $fillable = [
        'Partner_Name',
        'Partner_Address',
        'Partner_Tel',
        'Partner_Status',
    ];
}
