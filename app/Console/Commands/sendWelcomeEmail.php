<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SendwelcomeEmail as SendWelcomeEmailService;

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
     */
    public function __construct(SendWelcomeEmailService $email)
    {
        parent::__construct();
        $this->email = $email;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->email->send();

    }
}
