<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ThinkCalculate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:thinkCalculate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '思考逻辑计算相关';

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
        $result = 3 + 5;
        dd($result);
    }
}
