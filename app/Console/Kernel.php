<?php

namespace App\Console;

use App\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $users=User::all();
            foreach ($users as $user){
                foreach ($user->pack_take as $instace){
                    $end=$instace->pivot->end;
                    $today=date('Y-m-d H:i:s');
                    if($today>$end)
                        $user->pack_take()->detach($instace['id']);

                }
            }
        })->daily();

        #TODO ADD Alert Emails
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
