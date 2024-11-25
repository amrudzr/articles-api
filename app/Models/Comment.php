<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'content',
        'slug',
        'user_id',
        'article_id',
        'parent_id',
    ];

    protected function casts(): array
    {
        return [
            'updated_at' => 'datetime:Y-M-d H:i:s',
            'created_at' => 'datetime:Y-M-d H:i:s',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
    
    public function childs(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
