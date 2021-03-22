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
}
