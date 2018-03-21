<?php

namespace App\Console\Commands;

use App\EbaoFoSun;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class FoSunCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:FoSunCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //根据类型处理数据
        $models = EbaoFoSun::all();
        $count = count($models);
        $this->output->progressStart($count);
        $coverage  = [100, 200, 300, 400, 500];
        /** @var  $model EbaoFoSun */
        foreach ($models as $model) {
            foreach ($coverage as $item) {
                $single = [];
                $single['type'] = $model->type;
                $single['age'] = $model->age;
                $single['sex'] = $model->sex;
                $single['coverage'] = $model->coverage * $item;
                $single['premium_one'] = $model->premium_one * $item;
                $single['premium_two'] = $model->premium_two * $item;
                $single['premium_three'] = $model->premium_three * $item;
                $single['premium_four'] = $model->premium_four * $item;
                $single['premium_five'] = $model->premium_five * $item;
                if(EbaoFoSun::create($single)){
                    Log::info($single);
                }
            }
            $this->output->progressAdvance(1);
        }

        $this->output->progressFinish();
    }
}
