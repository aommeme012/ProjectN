<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $table= 'productions';
    protected $primaryKey= 'Production_Id';

    protected $fillable = [
        'Production_Date',
        'Production_Status',
        'Requismat_Id',
        'Emp_Id',
    ];
}
