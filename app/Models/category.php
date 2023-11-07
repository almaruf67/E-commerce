<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [

        'name',
        'status',
    ];

    public function isActive()
    {
        return $this->status === 1;
    }
    
    public function products()
    {
        return $this->hasMany(product::class);
    }
}
