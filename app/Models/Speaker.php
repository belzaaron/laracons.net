<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Speaker extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'github_username',
        'name',
        'email',
        'website',
    ];

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
     * The Laracons for the model.
     *
     * @return HasManyThrough
     */
    public function laracons(): HasManyThrough
    {
        return $this->hasManyThrough(Laracon::class, Talk::class, 'speaker_id', 'id');
    }

    /**
     * Update or create the model from the given GitHub username.
     *
     * Note: can also be passed name to ensure the model's name is updated or stored.
     *
     * @param string $username
     * @param null|string $name = null
     * @return Speaker
     */
    public static function fromGithubUsername(string $username, null|string $name = null): Speaker
    {
        return Speaker::updateOrCreate([
            'github_username' => $username,
        ], [
            'name' => $name ?? $username,
        ]);
    }
}
