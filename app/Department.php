<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // whitelist
    protected $fillable = ['name']; 
    
    // blacklist
    protected $guarded = ['id'];
    
    // created_at & updated_at tidak terpakai 
    public $timestamps = false;
}
