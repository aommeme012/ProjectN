<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class componentdetail extends Model
{
    protected $table= 'componentdetails';
    protected $primaryKey= 'Comde_Id';

    protected $fillable = [
        'Comde_Amount',
        'Material_Id',
        'component_Id',
    ];
}
