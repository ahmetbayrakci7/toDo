<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ProviderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Provider';

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
     * @return int
     */
    public function handle()
    {
        $providerName = $this->ask('Provider name?');
        $providerUrl = $this->ask('API url?');
        $providerParameters = $this->ask('API parameters? example(level,estimated_date,id)');

        $data = DB::table('provider')->insert([
            'name' => $providerName,
            'endpoint' => $providerUrl,
            'parameters' => $providerParameters
        ]);

        if($data){
            $this->info('Success');
        }else{
            $this->error('Error');
        }
    }
}
