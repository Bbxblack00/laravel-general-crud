<?php

use Illuminate\Database\Seeder;
use App\Match;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Match::class, 20) -> create();
    }
}
