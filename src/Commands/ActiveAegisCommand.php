<?php

namespace ChrisReedIO\ActiveAegis\Commands;

use Illuminate\Console\Command;

class ActiveAegisCommand extends Command
{
    public $signature = 'filament-active-aegis';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
