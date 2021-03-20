<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    protected $table= 'components';
    protected $primaryKey= 'component_Id';

    protected $fillable = [
        'component_Name',
        'component_Status',
    ];
    // public function Componendetail()
    // {
    //     return $this->hasOne(componentdetail::class ,'component_Id','component_Id');
    // }
}
