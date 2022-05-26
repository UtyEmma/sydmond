<?php

namespace App\Console\Commands;

use Database\Seeders\DefaultAdminSeeder;
use Illuminate\Console\Command;

class AppSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed all seedables';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $details = new DefaultAdminSeeder();
        $this->info('Default Administrator Account Created');


        $this->info('App Setup Completed Successfully!');
        $this->info('Admin Email: '.$details->admin->email);
        $this->info('Admin Password: '.$details->admin->plain_password);
    }
}
