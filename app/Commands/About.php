<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use OpenAI\Client;

class About extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'about {topic=: The topic of the blog post.} {--output=: The output file.}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Generate a blog post using ai about a topic';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Client $openAIClient)
    {
        // Generate a blog post based on the topic using openai
        $topic = $this->argument('topic');
        $fileTitle = str_replace(' ', '_', $topic);
        $datetime = new \DateTime();
        $output = 'blogs/'. $datetime->format('m_d_Y_g_i_A') . '-'. $fileTitle . '.md';
        $this->info("Generating a blog post about $topic...");
        $result = $openAIClient->chat()->create([
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'user', 'content' => 'Generate a blog post about ' . $topic],
            ],
        ]);
        file_put_contents($output, $result['choices'][0]['message']['content']);
        $this->info("Blog post generated and saved to $output");
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
