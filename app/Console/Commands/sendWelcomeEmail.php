<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class sendWelcomeEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'acacha:sendWelcomeEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends a welcome email';

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
     * @return mixed
     */
    public function handle()
    {
        dump("Sending email!");

    }
}
