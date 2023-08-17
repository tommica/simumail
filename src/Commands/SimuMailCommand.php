<?php

namespace Tommica\SimuMail\Commands;

use Illuminate\Console\Command;

class SimuMailCommand extends Command
{
    public $signature = 'simumail';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
