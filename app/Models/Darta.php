<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Darta extends Model
{
    use HasFactory;

    protected $casts =[
        'images' => 'array',
    ];
     /**
  * Get the user that owns the Chalani
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
 public function fisical_year(): BelongsTo
 {
     return $this->belongsTo(FisicalYear::class);
 }
 /**
  * Get the user that owns the Chalani
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
 public function department(): BelongsTo
 {
     return $this->belongsTo(Department::class);
 }
}
