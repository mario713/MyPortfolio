<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('logs')->insert([
                'type' => 'test',
                'user_id' => null,
                'log' => 'This is test log :)',
                'client_ip' => '127.0.0.1',
                'date' => Carbon::now(),
            ]);

    }
}
