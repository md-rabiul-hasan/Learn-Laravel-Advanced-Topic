<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Userlist extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'userlist';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all user information from user table';

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
        $header = ["name", "email"];
        $data = User::select('name','email')->get();
        return $this->table($header, $data);
    }
}
