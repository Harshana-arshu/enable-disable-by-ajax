<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='student';
    use HasFactory;
    public function parent(){ 
        
        return $this->hasMany('App\Models\Parents','id','fk_parent_id')->select(['name as parent_name','id']);
    

    }
}
