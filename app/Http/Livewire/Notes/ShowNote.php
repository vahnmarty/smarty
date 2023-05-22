<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;
use App\Jobs\GenerateStudyMaterial;

class ShowNote extends Component
{
    public Note $note;

    public $uuid;
    
    public function render()
    {
        $this->note = Note::whereUuid($this->uuid)->firstOrFail();
        return view('livewire.notes.show-note');
    }

    public function mount($uuid)
    {
        $this->uuid = $uuid;
    }

    public function generateStudy()
    {
        GenerateStudyMaterial::dispatch($this->note);
    }
}
