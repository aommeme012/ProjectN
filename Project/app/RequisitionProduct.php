<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequisitionProduct extends Model
{
    protected $table= 'requisition_products';
    protected $primaryKey= 'Requispro_Id';

    protected $fillable = [
        'Requispro_Date',
        'Requispro_Amount',
        'Product_Id',
        'Emp_Id',
    ];
}
