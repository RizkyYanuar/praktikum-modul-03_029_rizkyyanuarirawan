<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'title',
        'description',
        'activity_date',
        'category',
        'status',
        'category_id'
    ];
    protected function casts(): array
    {
        return [
            'activity_date' => 'date',
        ];
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
