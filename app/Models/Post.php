<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'user_id'];
    protected static function booted() {
        static::creating(function (Post $post) {
            if(auth()->check()){
                $post->user_id = Auth::id();
            }
        });
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id', '_id'); // Ensure the correct foreign key and local key are specified
    }
    
}
