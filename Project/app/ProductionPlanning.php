<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionPlanning extends Model
{
    protected $table= 'production_plannings';
    protected $primaryKey= 'Plan_Id';

    protected $fillable = [
        'Plan_Date',
        'Amount',
        'component_Id',
        'Product_Id',
    ];
}
