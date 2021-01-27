<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequisitionMaterial extends Model
{
    protected $table= 'requisition_materials';
    protected $primaryKey= 'Requismat_Id';

    protected $fillable = [
        'Requismat_Date',
        'Requismat_Amount',
        'Material_Id',
        'Plan_Id',
    ];
}
