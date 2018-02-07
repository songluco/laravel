<?php

namespace App\Console\Commands\Calculate;

use Illuminate\Console\Command;

class AdvanceAbout extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Calculate:AdvanceAbout {principal?}'; //principal参数可选
//    protected $signature = 'Calculate:AdvanceAbout {principal} {interestRate=0.2}'; //principal参数必填，interestRate参数可选，且默认值为0.2

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '计算：提前还款相关';

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
        \Log::info('what do you mean ?');
    }
}
