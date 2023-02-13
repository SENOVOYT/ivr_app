<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class logger implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $ip;
    private $email;
    private $info;
    
    public function __construct($ip,$email,$info)
    {
        //
        $this->ip=$ip;
        $this->email=$email;
        $this->info=$info;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/'.date("l jS \of F Y").'/'.$this->email.'.log'),
          ])->info('[ '.$this->ip.' ] '.$this->info);
    }
    public function failed(\Exception $e = null)
    {
        //handle error
    }
    function __destruct() {
        $this->ip=null;
        $this->email=null;
        $this->info=null;
    }
}
