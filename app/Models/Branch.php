<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    public function user(): HasMany 
    {
        return $this->HasMany(User::class);
    }
}
