<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{    
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'employees';

    protected $primarykey = 'id';
    protected $fillable = [
        'id', 'nic', 'name', 'employeeType','emp_pic', 'address', 'birthday'
    ];
}
