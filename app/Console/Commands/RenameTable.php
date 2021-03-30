<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RenameTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'owncommand:renametable {from : Give old table name} {to : Give new table name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command for table rename';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $from = $this->argument('from');
        $to   = $this->argument('to');
        try{
            $sql  = DB::statement("ALTER TABLE $from RENAME TO $to");
            $this->info("Table rename $from to $to successfully");
        }catch(Exception $e){
            $this->error($e->getMessage());
        }
        

    }
}
