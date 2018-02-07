<?php

namespace App\Listeners;

use App\Events\UserSignUp;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleUserSignUp
{
    public $filesystem;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem)
    {
        //如果监听类想要使用其他类，可以通过构造方法依赖注入
        $this->filesystem = $filesystem;
    }

    /**
     * Handle the event.
     *
     * @param  UserSignUp  $event
     * @return void
     */
    public function handle(UserSignUp $event)
    {
        dump($this->filesystem->get('/Users/songlu/codecasts/laravel/cron.txt'));
        dump($event->user->name . '! hello, welcome to ' . env('APP_DOMAIN', 'Laravel'));
    }
}
