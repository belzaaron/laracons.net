<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Str;

class Laracon extends Model
{
    /**
     * The key for online Laracons.
     *
     * @var string
     */
    public const ONLINE = 'online';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'location',
        'timezone',
        'started_at',
        'ended_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
    ];

    /**
     * Interact with the model's name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => Str::start($value, 'Laracon '),
        );
    }

    /**
     * The talks for the model.
     *
     * @return HasMany
     */
    public function talks(): HasMany
    {
        return $this->hasMany(Talk::class);
    }

    /**
     * The speakers for the model.
     *
     * @return HasManyThrough
     */
    public function speakers(): HasManyThrough
    {
        return $this->hasManyThrough(Speaker::class, Talk::class, 'speaker_id', 'id');
    }

    /**
     * Create a talk using the given speaker.
     *
     * @param array $talk
     * @param Speaker $speaker
     * @return Talk
     */
    public function createTalkWithSpeaker(array $talk, Speaker $speaker): Talk
    {
        return $this->talks()->save(
            $speaker->talks()->make($talk)
        );
    }
}
