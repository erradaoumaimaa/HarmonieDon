<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'address',
        'object_state',
        'status',
        'donor_availability',
        'item_condition',
        'categorie_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function scopeFilter($query, array $filters) {

        $query->when($filters['q'] ?? false,
            fn($query, $q) => $query->where('title', 'LIKE', '%' . $q . '%')
        );

        $query->when($filters['category'] ?? false,
            fn($query, $category) => $query->whereHas('category', fn($query) => $query->where('id', $category))
        );
    }
}
