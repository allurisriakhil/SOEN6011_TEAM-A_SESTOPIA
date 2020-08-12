<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    /**
     * Get the author that owns the phone.
     */
    public function skill()
    {
        return $this->belongsTo('App\Models\Skill', 'id');
    }
}
