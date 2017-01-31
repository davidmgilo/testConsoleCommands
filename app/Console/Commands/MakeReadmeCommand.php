<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Services\MakeReadmeCommand as MakeReadmeCommandService;

class MakeReadmeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:readme';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a MYREADME.md';
    protected $service;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(MakeReadmeCommandService $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->service->create();
        $this->info("File MyReadme.md created successfully");
    }
}
