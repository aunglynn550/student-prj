<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Age;

class Blog extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->hasOne(Category::class);
    }
    public function ages()
    {
        return $this->hasOne(Age::class);
    }
}
