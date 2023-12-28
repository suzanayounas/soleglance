<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SentimentAnalysisCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     * 
     *
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     *
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
        $tweet="Here is the sentiment analysis";
        $output = exec('python path/to/python/script.py "' . $tweet . '"');
        echo "Sentiment analysis result: " . $output;
        return 0;
    }
    
}
