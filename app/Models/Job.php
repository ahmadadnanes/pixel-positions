<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function tag(string $tag) {
        $tag = Tag::firstOrCreate(['name' => $tag]);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
