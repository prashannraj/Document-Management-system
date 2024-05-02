<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FisicalYear extends Model
{
    use HasFactory;
    /**
     * Get all of the comments for the FisicalYear
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chalanis(): HasMany
    {
        return $this->hasMany(Chalani::class);
    }

    /**
     * Get all of the comments for the FisicalYear
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dartas(): HasMany
    {
        return $this->hasMany(Darta::class);
    }

    /**
     * Get all of the comments for the FisicalYear
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tippanis(): HasMany
    {
        return $this->hasMany(Tippani::class);
    }
}
