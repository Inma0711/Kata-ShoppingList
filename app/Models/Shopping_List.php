<?php

namespace App\Models;

use App\Models\Type_Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shopping_List extends Model
{
    use HasFactory;

    protected $table = 'shopping_list';

    protected $fillable = [
        'id_article'
    ];

    public function type(): BelongsTo {
        return $this->belongsTo(Article::class, 'id_article');
    }
}
