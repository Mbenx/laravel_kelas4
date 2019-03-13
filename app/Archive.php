<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archive extends Model
{
    // whitelist
    protected $fillable = ['name']; 
    
    // blacklist
    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function inventory()
    {
        return $this->hasOne('App\Inventory');
    }
}
