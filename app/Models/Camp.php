<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Camp extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'price'];

    public function getIsRegisteredAttribute()
    {
        if(!Auth::check()){
            return false;
        }

        return Checkout::whereCampId($this->id)
            ->whereUserId(Auth::id())
            ->exists();
            
    }

    
}
