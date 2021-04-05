<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authentication;
use Illuminate\Notifications\Notifiable;

class Employee extends Authentication
{
    use Notifiable;

    protected $table= 'employees';
    protected $primaryKey= 'Emp_Id';

    protected $hidden =[
        'Password'
    ];

    protected $fillable = [
        'idemp',
        'Fname',
        'Lname',
        'Address',
        'Tel',
        'Sex',
        'Username',
        'Password',
        'Emp_Status',
        'Dep_Id',
        'type'
    ];

    public function getAuthPassword(){
        return $this->Password;
    }

    const ADMIN_TYPE = 1 ;
    const DEFAULT_TYPE = 0 ;

    public function isAdmin(){
        return $this->type === self::ADMIN_TYPE;
    }
    public function getEmpId()
    {
        $EMP_Id = Employee::orderby('idemp','DESC')->first();
        if($EMP_Id){
            $E_Id = explode('EMP',$EMP_Id->idemp);
            $emp = "EMP" . str_pad(intval($E_Id[1])+1,4,0,STR_PAD_LEFT);
        }
        else{
            $emp = "EMP" . str_pad(1,4,0,STR_PAD_LEFT);
        }
        return $emp;
    }
}
