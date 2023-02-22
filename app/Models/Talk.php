<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Talk extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'video_url',
        'video_starts_at',
        'video_ends_at',
        'length',
        'reference_url',
    ];

    // Helpful calculator for length: https://www.calculator.net/time-duration-calculator.html

    /**
     * The Laracon for the model.
     *
     * @return BelongsTo
     */
    public function laracon(): BelongsTo
    {
        return $this->belongsTo(Laracon::class);
    }

    /**
     * The speaker for the model.
     *
     * @return BelongsTo
     */
    public function speaker(): BelongsTo
    {
        return $this->belongsTo(Speaker::class);
    }
}
