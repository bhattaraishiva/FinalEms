<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePersonalDetail extends Model
{
    protected $guarded = [];
    // protected $primaryKey = 'id';

    
    public function emp_current_record(){
        return $this->belongsTo('App\EmployeeCurrentRecord','employee_id');        
    }
    public function family_info(){
        return $this->hasOne('App\EmployeeFamilyInfo','employee_id');        
    }
   
   
}
