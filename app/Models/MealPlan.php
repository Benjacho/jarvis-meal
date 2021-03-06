<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MealPlan extends Model
{
    use HasFactory;

    public function meals(): BelongsToMany
    {
        return $this->belongsToMany(Meal::class);
    }
}
