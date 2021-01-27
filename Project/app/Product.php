<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= 'products';
    protected $primaryKey= 'Product_Id';

    protected $fillable = [
        'Product_Name',
        'Product_Amount',
        'Product_Status',
        'Type_Id',
    ];
}
