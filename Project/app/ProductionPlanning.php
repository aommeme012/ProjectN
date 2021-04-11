<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionPlanning extends Model
{
    protected $table= 'production_plannings';
    protected $primaryKey= 'Plan_Id';

    protected $fillable = [
        'idplan',
        'Plan_Date',
        'Amount',
        'component_Id',
        'Product_Id',
        'Planning_Status',
    ];
    public function getplanId()
    {
        $plan_Id = ProductionPlanning::orderby('idplan','DESC')->first();
        if($plan_Id){
            $plan_Id = explode('PLAN',$plan_Id->idplan);
            $plan = "PLAN" . str_pad(intval($plan_Id[1])+1,4,0,STR_PAD_LEFT);
        }
        else{
            $plan = "PLAN" . str_pad(1,4,0,STR_PAD_LEFT);
        }
        return $plan;
    }
}
