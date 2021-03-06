<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello {firstname} {--l|lastname=islam}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is make command from command';

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
        $firstname = $this->argument('firstname');
        $lastname = $this->option('lastname');
        // return $this->info("My name is {$firstname} {$lastname}");

        $name = $this->ask("What is your name ?");
        $confirm = $this->confirm("Are you want to print your name ?");
        if($confirm){
            return $this->info($name);
        }
    }
}
