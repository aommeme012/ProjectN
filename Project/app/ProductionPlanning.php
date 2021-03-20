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
        'Planning_Status',
    ];
    // public function Component()
    // {
    //     return $this->belongsTo(component::class ,'component_Id','component_Id');
    // }
    // public function Product()
    // {
    //     return $this->hasOne(Product::class ,'Product_Id','Product_Id');
    // }
}
