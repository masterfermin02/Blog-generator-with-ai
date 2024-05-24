<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use OpenAI\Client;

class ImageGenerator extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'app:image-generator {topic=: The topic of the image}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Client $openAIClient)
    {
        // Generate an image based on the topic using openai
        $topic = $this->argument('topic');
        $this->info("Generating an image about $topic...");
        $result = $openAIClient->images()->create([
            'model' => 'dall-e-3',
            'prompt' => 'A image of ' . $topic,
            'n' => 1,
            'size' => '1024x1024',
            'response_format' => 'url',
        ]);
        print_r($result['data']);
        $this->info("Image generated and saved to $topic.png");
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
