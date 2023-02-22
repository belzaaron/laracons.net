<?php

namespace Database\Seeders;

use App\Models\Laracon;
use App\Models\Speaker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LaraconOnlineSummer2022Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laracon = $this->laracon();

        $laracon->createTalkWithSpeaker([
            'title' => 'Not Quite My Type',
            'description' => null,
            'video_url' => 'https://youtu.be/f4QShF42c6E?t=874',
            'video_starts_at' => '00:14:34',
            'video_ends_at' => '00:54:33',
            'length' => 2399,
        ], Speaker::fromGithubUsername('ksassnowski', 'Kai Sassnowski'));

        $laracon->createTalkWithSpeaker([
            'title' => 'Kubernetes and Laravel',
            'description' => null,
            'video_url' => 'https://youtu.be/f4QShF42c6E?t=3333',
            'video_starts_at' => '00:55:33',
            'video_ends_at' => '01:37:09',
            'length' => 2496,
        ], Speaker::fromGithubUsername('bosunski', 'Bosun Egberinde'));
    }

    /**
     * Create the Laracon model.
     *
     * @return Laracon
     */
    protected function laracon(): Laracon
    {
        return Laracon::create([
            'name' => 'Online Summer 2022',

            'location' => Laracon::ONLINE,
            'timezone' => 'America/New_York',

            'started_at' => Carbon::create(2022, 8, 14, 8, 45),
            'ended_at' => Carbon::create(2022, 8, 14, 18, 45),
        ]);
    }
}
