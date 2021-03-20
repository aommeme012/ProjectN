<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class componentdetail extends Model
{
    protected $table= 'componentdetails';
    protected $primaryKey= 'Comde_Id';

    protected $fillable = [
        'Comde_Amount',
        'component_Value',
        'Material_Id',
        'component_Id',
    ];
    // public function Material()
    // {
    //     return $this->hasMany(Materials::class ,'Material_Id','Material_Id');
    // }
}
