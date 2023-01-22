<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Age extends Model
{
    use HasFactory;
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
