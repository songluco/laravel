<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LogInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:log';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'log info';

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
        \Log::info('Log it works');
    }


    /* 定时任务写完以后，laravel框架会自动执行。
     * 系统的 cron 会每分钟执行 php artisan schedule:run,然后在由 schedule:run 来判断是不是要执行代码
     *
     * 实现过程：
     *  1.将所有定时任务命令一切准备好以后。
     *  2.写好cron，然后crontab 自己的cron文件。
     *  3.系统的 cron 会每分钟执行 php artisan schedule:run
     *  4.由 schedule:run 来判断是不是要执行代码
     *
    */

}
