<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'activity_date',
        'category',
        'status',
        'category_id',
        'code'
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
