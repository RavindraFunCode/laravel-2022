<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GetDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:get_db_name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To Get Database Name';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $db_name = DB::connection()->getDatabaseName();
        $this->info('The Current Db Name is: '.$db_name);
        return 0;
    }
}
