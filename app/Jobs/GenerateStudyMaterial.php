<?php

namespace App\Jobs;

use App\Models\Note;
use Illuminate\Bus\Queueable;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class GenerateStudyMaterial implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Note $note;
    /**
     * Create a new job instance.
     */
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $contents = $this->makeItReadable();

        $this->note->formatted_contents = $contents;
        $this->note->save();
    }

    public function makeItReadable()
    {
        $notes = $this->note->contents;

        $system_prompt = 'Please convert this  article into a readable version so that a user can easily study it. Format the contents into an HTML format with tailwind CSS styling. Apply bold, italicized, colors, color highlights if possible. ';

        $messages[] = [
            'role' => 'system', 
            'content' =>  $system_prompt
        ];

        $messages[] = [
            'role' => 'user', 
            'content' =>  $notes
        ];

        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        ]);

        $content = $response['choices'][0]['message']['content'];

        return $content;
    }
}
