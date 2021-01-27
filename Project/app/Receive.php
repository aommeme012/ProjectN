<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receive extends Model
{
    protected $table= 'receives';
    protected $primaryKey= 'Receive_Id';

    protected $fillable = [
        'Receive_Date',
        'Receive_Amount',
        'Emp_Id',
        'Purchase_Id',
    ];
}
