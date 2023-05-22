<?php

namespace App\Http\Livewire\Notes;

use Log;
use App\Models\Note;
use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class StudyMode extends Component
{
    public Note $note;

    public $ready = false;

    public $contents;

    public function render()
    {
        return view('livewire.notes.study-mode')->layout('layouts.mode');
    }

    public function mount($uuid)
    {
        $this->note = Note::whereUuid($uuid)->firstOrFail();

        //$this->makeItReadable();
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

        Log::channel('openai')->info('Study Mode: CHATGPT Result');
        Log::channel('openai')->info($content);
    }
}
