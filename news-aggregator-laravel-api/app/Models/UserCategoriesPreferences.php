<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategoriesPreferences extends Model
{
    use HasFactory;

    protected $table = 'user_categories_preferences';

    protected $fillable = [
        'user_id',
        'value',
        'label'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
