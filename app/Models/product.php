<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [

        'Title',
        'Poster',
        'Description',
        'Price',
        "Short_Description",
        "Old_Price"

    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
