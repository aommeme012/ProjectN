<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table= 'type_products';
    protected $primaryKey= 'Type_Id';

    protected $fillable = [
        'Type_Name',
        'Type_Status',
    ];
}
