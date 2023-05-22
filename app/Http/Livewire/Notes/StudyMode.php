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

    public $study_material;

    public function render()
    {
        return view('livewire.notes.study-mode')->layout('layouts.mode');
    }

    public function mount($uuid)
    {
        $this->note = Note::whereUuid($uuid)->firstOrFail();

        $this->study_material = $this->note->formatted_contents;
    }

    
}
