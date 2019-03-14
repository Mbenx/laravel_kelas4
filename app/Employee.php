<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    // whitelist
    protected $fillable = ['name','department_id']; 
    
    // blacklist
    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];
     
    // created_at & updated_at tidak terpakai 
    //public $timestamps = false;

    public function position()
    {
        return $this->belongsTo('App\Position');
    }
}
