<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
     // whitelist
     protected $fillable = ['name','archive_id']; 
    
     // blacklist
     protected $guarded = ['id'];
 
     use SoftDeletes;
     protected $dates = ['deleted_at'];

     public function archive()
    {
        return $this->belongsTo('App\Archive');
    }
}
