<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    protected $table= 'materials';
    protected $primaryKey= 'Material_Id';

    protected $fillable = [
        'idmat',
        'Material_Name',
        'Material_Amount',
        'unitmaterial',
        'Material_Status',
    ];
    public function getmatId()
    {
        $Mat_Id = Materials::orderby('idmat','DESC')->first();
        if($Mat_Id){
            $M_Id = explode('MATS',$Mat_Id->idmat);
            $mat = "MATS" . str_pad(intval($M_Id[1])+1,4,0,STR_PAD_LEFT);
        }
        else{
            $mat = "MATS" . str_pad(1,4,0,STR_PAD_LEFT);
        }
        return $mat;
    }
}
