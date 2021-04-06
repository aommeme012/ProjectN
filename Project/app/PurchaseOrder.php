<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table= 'purchase_orders';
    protected $primaryKey= 'Purchase_Id';

    protected $fillable = [
        'idpur',
        'Purchase_Date',
        'Emp_Id',
        'Purchase_Status',
        'Partner_Id',
    ];
    public function getpurId()
    {
        $Pur_Id = PurchaseOrder::orderby('idpur','DESC')->first();
        if($Pur_Id){
            $P_Id = explode('PUR',$Pur_Id->idpur);
            $PUR = "PUR" . str_pad(intval($P_Id[1])+1,4,0,STR_PAD_LEFT);
        }
        else{
            $PUR = "PUR" . str_pad(1,4,0,STR_PAD_LEFT);
        }
        return $PUR;
    }
}
