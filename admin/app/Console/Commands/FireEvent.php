<?php

namespace App\Console\Commands;

use App\Jobs\TestJob;
use Illuminate\Console\Command;

class FireEvent extends Command
{
    protected $signature = 'Fire';

    public function handle()
    {
        TestJob::dispatch();
    }
}
