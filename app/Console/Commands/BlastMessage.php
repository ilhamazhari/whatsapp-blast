<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\WhatsApp\MessageBlastController;

class BlastMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'message:blast';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send WA Message blast';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $controller = new MessageBlastController;

        $controller->blast();
    }
}
