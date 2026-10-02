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

    public function scopeSearch($query, $search)
    {
        $query->when($search, function ($q, $search) {
            return $q->where(function ($query) use ($search) {
                $query->where('code', 'like', '%' . $search . '%')
                    ->orWhere('title', 'like', '%' . $search . '%');
            });
        });
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['category_id'] ?? false, function ($q, $category_id) {
            return $q->where('category_id', $category_id);
        });

        $query->when($filters['status'] ?? false, function ($q, $status) {
            return $q->where('status', $status);
        });
    }

    public function scopeSortDate($query, $sort)
    {
        // Jika filter sort adalah 'terlama', urutkan ASC, selain itu default DESC (terbaru)
        $direction = ($sort === 'terlama') ? 'asc' : 'desc';
        return $query->orderBy('activity_date', $direction);
    }
}
