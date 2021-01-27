<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table= 'purchase_orders';
    protected $primaryKey= 'Purchase_Id';

    protected $fillable = [
        'Purchase_Date',
        'Emp_Id',
        'Partner_Id',
    ];
}
